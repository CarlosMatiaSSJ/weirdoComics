<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\venta;
use App\productoVendido;
use PDF;

class controladorVentas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session()->forget('totalVenta');
        $total = 0;
        $totalComic = 0;
        $totalArticulo = 0;
        foreach ($this->obtenerProductosComic() as $producto) {
            $total += $producto->cantidadComic * $producto->precioVentaComic;
        }
        foreach ($this->obtenerProductosArticulo() as $productoArticulo) {
            $total += $productoArticulo->cantidadArticulo * $productoArticulo->precioVentaArticulo;
        }
       
        session(["totalVenta" => $total]);
        return view('pVenta',["total"=>$total]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }





    public function agregarProductoVenta(Request $request)
    {
        $name = $request->post("codigo");
        $producto = DB::table('comics')->where('nombreComic','like','%'.$name.'%')->get()->first();
        if (!$producto) {
            $productoArticulo = DB::table('articulos')->where('descripcionArticulo','like','%'.$name.'%')->get()->first();
            if (!$producto and !$productoArticulo) {
                return redirect('pV')->with('notFound','abc');
            }
            $this->agregarProductoACarritoArticulo($productoArticulo);
            return redirect()
            ->route("puntoVenta");
        }

        $this->agregarProductoACarritoComic($producto);
        return redirect()
            ->route("puntoVenta");
    }


    private function agregarProductoACarritoComic($producto)
    {
        if ($producto->cantidadComic <= 0) {
            return redirect()->route("puntoVenta")
                ->with([
                    "noStock" => "No hay existencias del producto",
                    "tipo" => "danger"
                ]);
        }
        $productos = $this->obtenerProductosComic();
        $posibleIndice = $this->buscarIndiceDeProductoComic($producto->nombreComic, $productos);
        // Es decir, producto no fue encontrado
        if ($posibleIndice === -1) {
            $producto->cantidadComic = 1;
            array_push($productos, $producto);
        } else {
            if ($productos[$posibleIndice]->cantidadComic + 1 > $producto->cantidadComic) {
                return redirect('pV')
                    ->with([
                        "mensaje" => "No se pueden agregar más productos de este tipo, se quedarían sin existencia",
                        "tipo" => "danger"
                    ]);
            }
            $productos[$posibleIndice]->cantidadComic++;
        }
        $this->guardarProductosComic($productos);
    }


    private function agregarProductoACarritoArticulo($productoArticulo)
    {
        if ($productoArticulo->cantidadArticulo <= 0) {
            return redirect()->route("puntoVenta")
                ->with([
                    "mensaje" => "No hay existencias del producto",
                    "tipo" => "danger"
                ]);
        }
        $productosArticulo = $this->obtenerProductosArticulo();
        $posibleIndice = $this->buscarIndiceDeProductoArticulo($productoArticulo->descripcionArticulo, $productosArticulo);
        // Es decir, producto no fue encontrado
        if ($posibleIndice === -1) {
            $productoArticulo->cantidadArticulo = 1;
            array_push($productosArticulo, $productoArticulo);
        } else {
            if ($productosArticulo[$posibleIndice]->cantidadArticulo + 1 > $productoArticulo->cantidadArticulo) {
                return redirect('pV')
                    ->with([
                        "mensaje" => "No se pueden agregar más productos de este tipo, se quedarían sin existencia",
                        "tipo" => "danger"
                    ]);
            }
            $productosArticulo[$posibleIndice]->cantidadArticulo++;
        }
        $this->guardarProductosArticulo($productosArticulo);
    }

    private function obtenerProductosComic()
    {
        $productos = session("productos");
        if (!$productos) {
            $productos = [];
        }
        return $productos;
    }

    private function obtenerProductosArticulo()
    {
        $productosArticulo = session("productosArticulo");
        if (!$productosArticulo) {
            $productosArticulo = [];
        }
        return $productosArticulo;
    }


    private function buscarIndiceDeProductoComic(string $nombreComic, array &$productos)
    {
        foreach ($productos as $indice => $producto) {
            if ($producto->nombreComic === $nombreComic) {
                return $indice;
            }
        }
        return -1;
    }

    private function buscarIndiceDeProductoArticulo(string $descripcionArticulo, array &$productosArticulo)
    {
        foreach ($productosArticulo as $indice => $productoArticulo) {
            if ($productoArticulo->descripcionArticulo === $descripcionArticulo) {
                return $indice;
            }
        }
        return -1;
    }


    private function guardarProductosComic($productos)
    {
        session(["productos" => $productos,
        ]);
    }

    private function guardarProductosArticulo($productosArticulo)
    {
        session(["productosArticulo" => $productosArticulo,
        ]);
    }

    public function cancelarVenta()
    {
        $this->vaciarProductos();
        return redirect('pV')
            ->with("ventaCancelada", "Venta cancelada");
    }


    private function vaciarProductos()
    {
        $this->guardarProductosComic(null);
        $this->guardarProductosArticulo(null);
    }

    


    public function terminarVenta(Request $request)
    {
        
        $ventas = new venta();
        $ventas->saveOrFail();
        $idVenta = $ventas->id;

        $latestId = DB::table('ventas')->latest()->first()->id;
       
        
        $productosArticulo = $this->obtenerProductosArticulo();
        $productos = $this->obtenerProductosComic();
        // Recorrer carrito de compras Comic
        foreach ($productos as $producto) {
            // El producto que se vende...


            $productoVendido = new productoVendido();
            $productoVendido->fill([
                "id_venta" =>  $latestId,
                "descripcion" => $producto->nombreComic,
                "precio" => $producto->precioVentaComic,
                "cantidad" => $producto->cantidadComic,
            ]);
            // Lo guardamos
            $productoVendido->saveOrFail();

            $nuevaCantidad = DB::table('comics')->where('idComic',$producto->idComic)->first();
            $nuevaCantidad->cantidadComic-=$productoVendido->cantidad;
            $producto->cantidadComic -= $productoVendido->cantidad;
            
            // Y restamos la existencia del original
            DB::table('comics')->where('idComic',$producto->idComic)->update([
                "cantidadComic" => $nuevaCantidad->cantidadComic
            ]);

             }
            //Recorrer el carrito de compras articulos
            foreach ($productosArticulo as $productoArticulo) {
                // El producto que se vende...
                $productoVendidoArticulo = new productoVendido();
                $productoVendidoArticulo->fill([
                    "id_venta" =>  $latestId,
                    "descripcion" => $productoArticulo->descripcionArticulo,
                    "precio" => $productoArticulo->precioVentaArticulo,
                    "cantidad" => $productoArticulo->cantidadArticulo,
                ]);
                // Lo guardamos
                $productoVendidoArticulo->saveOrFail();
    
                $nuevaCantidadArticulo = DB::table('articulos')->where('idArticulo',$productoArticulo->idArticulo)->first();
                $nuevaCantidadArticulo->cantidadArticulo-=$productoVendidoArticulo->cantidad;
                $productoArticulo->cantidadArticulo -= $productoVendidoArticulo->cantidad;
                
                // Y restamos la existencia del original
                DB::table('articulos')->where('idArticulo',$productoArticulo->idArticulo)->update([
                    "cantidadArticulo" => $nuevaCantidadArticulo->cantidadArticulo
                ]);

        }   
        
        
       
       
        $this->vaciarProductos();
        $this->imprimir();
        return redirect()->route('imprimir')->with('ventaTerminada','abc');

}


    public function imprimir()
        {       
    
            $lastestId = DB::table('ventas')->latest()->first()->id;
            $consultaVenta = DB::table('productos_vendidos')->where('id_venta', $lastestId)->get();
            return PDF::loadView('ticketVenta', compact('consultaVenta'))
            ->download('ticket.pdf');
            return redirect('pV') ;
            
            
            
        }
 




}
