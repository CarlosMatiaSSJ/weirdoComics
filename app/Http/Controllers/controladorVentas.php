<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\venta;
use App\productoVendido;


class controladorVentas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total = 0;
        foreach ($this->obtenerProductosComic() as $producto) {
            $total += $producto->cantidadComic * $producto->precioVentaComic;
        }
        return view('pVenta',
        ["total"=>$total
]);
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
    public function show($id)
    {
        //
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
            $producto = DB::table('articulos')->where('descripcionArticulo','like','%'.$name.'%')->get()->first();
            if (!$producto) {
                return redirect('pV')->with('notFound','abc');
            }
            $this->agregarProductoACarritoArticulo($producto);
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


    private function agregarProductoACarritoArticulo($producto)
    {
        if ($producto->cantidadArticulo <= 0) {
            return redirect()->route("vender.index")
                ->with([
                    "mensaje" => "No hay existencias del producto",
                    "tipo" => "danger"
                ]);
        }
        $productos = $this->obtenerProductosArticulo();
        $posibleIndice = $this->buscarIndiceDeProductoArticulo($producto->codigo_barras, $productos);
        // Es decir, producto no fue encontrado
        if ($posibleIndice === -1) {
            $producto->cantidad = 1;
            array_push($productos, $producto);
        } else {
            if ($productos[$posibleIndice]->cantidad + 1 > $producto->existencia) {
                return redirect('pV')
                    ->with([
                        "mensaje" => "No se pueden agregar más productos de este tipo, se quedarían sin existencia",
                        "tipo" => "danger"
                    ]);
            }
            $productos[$posibleIndice]->cantidad++;
        }
        $this->guardarProductos($productos);
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
        $productos = session("productos");
        if (!$productos) {
            $productos = [];
        }
        return $productos;
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

    private function buscarIndiceDeProductoArticulo(string $nombreComic, array &$productos)
    {
        foreach ($productos as $indice => $producto) {
            if ($producto->nombreComic === $nombreComic) {
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

    public function cancelarVenta()
    {
        $this->vaciarProductos();
        return redirect('pV')
            ->with("ventaCancelada", "Venta cancelada");
    }


    private function vaciarProductos()
    {
        $this->guardarProductosComic(null);
    }

    


    public function terminarVenta(Request $request)
    {
        
        $ventas = new venta();
        $ventas->saveOrFail();
        $idVenta = $ventas->id;

        $latestId = DB::table('ventas')->latest()->first()->id;
       
        

        $productos = $this->obtenerProductosComic();
        // Recorrer carrito de compras
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
        $this->vaciarProductos();
        return redirect('pV')->with('ventaTerminada','abc');
    }

    

}
