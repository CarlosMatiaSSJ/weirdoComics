<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\validadorWeirdo;
use App\Http\Requests\validadorWeirdoActualizarComic;
use App\Http\Requests\validadorWeirdoActualizarArticulo;
use App\Http\Requests\validadorWeirdoAgregarArticulo;
use App\Http\Requests\validadorWeirdoAgregarPedido;
use App\Http\Requests\validadorWeirdoAgregarComic;
use App\Http\Requests\validadorWeirdoProveedores;
use DB;


class controladorWeirdo extends Controller
{

    public function confirmarFormulario(validadorWeirdo $request)
    {
        $validador = DB::table('usuarios')
        ->where('user', $request->input('txtUsuario'))
        ->where('password',$request->input('txtContraseña'))
        ->GET()
        ->first();

        if (is_null($validador)){
            return redirect('/')->with('verificar','abc');
            
        }
        else{
            return redirect('index')->with('confirmacion', 'Información Recibida');
        }
        
    }


    public function confirmarProveedor(validadorWeirdoProveedores $req)
    {
        return redirect('proveedores')->with('confirmacion', 'Información Recibida');
    }
    public function confirmarActualizacionProveedor(validadorWeirdoProveedores $req)
    {
        return redirect('proveedores')->with('actualizacion', 'comic Recibido');
    }

   

    public function confirmarComic(validadorWeirdoAgregarComic $req)
    {
        return redirect('comics')->with('comicAgregado', 'comic Recibida');
    }

    public function confirmarActualizacionComic(validadorWeirdoActualizarComic $req)
    {
        return redirect('comics')->with('actualizacion', 'comic Recibido');
    }
    public function confirmarActualizacionArticulo(validadorWeirdoActualizarArticulo $req)
    {
        return redirect('articulos')->with('actualizacion', 'articulo Recibido');
    }

    public function confirmarArticulo(validadorWeirdoAgregarArticulo $req)
    {
        return redirect('articulos')->with('articuloAgregado', 'Articulo Recibida');
    }
    public function confirmarPedido(validadorWeirdoAgregarPedido $req)
    {
        return redirect('pedidos')->with('pedidoAgregado', 'Articulo Recibida');
    }


    public function showLogin()
    {
        return view('login');
    }


    public function showInventario(Request $request)
    {
        $filtrar = $request->get('filtrar');
        $consultaArticulos = DB::table('articulos')->where('descripcionArticulo','like','%'.$filtrar.'%')->get();
        $consultaComics = DB::table('comics')->where('nombreComic','like','%'.$filtrar.'%')->get();
        return view('inventario', compact('consultaArticulos','consultaComics','filtrar'));
        
    }

    public function showIndex()
    {
        return view('menu');
    }

    public function showComics()
    {
        return view('comics');
    }

    public function showAgregarComic()
    {
        return view('agregarComic');
    }

    public function showEditarComic()
    {
        return view('editarComic');
    }

    public function showPedidos()
    {
        return view('pedido');
    }
    public function showAgregarPedido()
    {
        return view('agregarPedido');
    }

    public function showProveedores()
    {
        return view('proveedores');
    }

    public function showAgregarProveedor()
    {
        return view('agregarProveedor');
    }
    public function showEditarProveedor()
    {
        return view('editarProveedor');
    }


    public function showPuntoVenta()
    {
        return view('pVenta');
    }

    public function showEditarArticulo()
    {
        return view('editarArticulo');
    }

    public function showArticulos()
    {
        return view('articulos');
    }

    public function showAgregarArticulo()
    {
        return view('agregarArticulo');
    }

}
