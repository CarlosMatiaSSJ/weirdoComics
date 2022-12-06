<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorWeirdo;
use Illuminate\Http\Request;
use App\Http\Requests\validadorWeirdoProveedores;
use DB;
use Carbon\Carbon;

class controladorBDProveedores extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultaProveedores = DB::table('proveedores')->get();
        return view('proveedores', compact('consultaProveedores'));
    }

    /**
     * Muestra el formulario para agregar un nuevo proveedor.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agregarProveedor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validadorWeirdoProveedores $request)
    {
        DB::table('proveedores')->insert([
            "empresaProveedor" => $request->input('empresa'),
            "direccionProveedor" => $request->input('direccion'),
            "paisProveedor" => $request->input('pais'),
            "contactoProveedor" => $request->input('contacto'),
            "noFijoProveedor" => $request->input('noFijo'),
            "noCelularProveedor" => $request->input('noCelular'),
            "correoProveedor" => $request->input('correo')

    ]);
    return redirect('proveedores/index')->with('confirmacion','confirmarProveedor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $consultaProveedor = DB::table('proveedores')->where('idProveedor',$id)->get()->first(); 
       $consultaComics = DB::table('comics')->where('idProveedor_detalle',$id)->get();
       $consultaArticulos = DB::table('articulos')->where('idProveedor_detalleArticulo',$id)->get();



        return view('productosProveedor')
        ->with(compact('consultaProveedor'))
        ->with(compact('consultaComics'))
        ->with(compact('consultaArticulos'));
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
    public function update(validadorWeirdoProveedores $request, $id)
    {
        DB::table('proveedores')->where('idProveedor',$id)->update([
            "empresaProveedor" => $request->input('empresa'),
            "direccionProveedor" => $request->input('direccion'),
            "paisProveedor" => $request->input('pais'),
            "contactoProveedor" => $request->input('contacto'),
            "noFijoProveedor" => $request->input('noFijo'),
            "noCelularProveedor" => $request->input('noCelular'),
            "correoProveedor" => $request->input('correo')

    ]);
    return redirect('proveedores/index')->with('actualizacion','abc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('proveedores')->where('idProveedor',$id)->delete();
        return redirect('proveedores/index')->with('eliminacion','abc');
    }

    public function crearPedido($id)
    {
        $consultaArticulos = DB::table('articulos')->where('idProveedor_detalleArticulo',$id)->get();
        $consultaComics = DB::table('comics')->where('idProveedor_detalle',$id)->get();
        $consultaProveedor = DB::table('proveedores')->where('idProveedor',$id)->get()->first();
        return view('agregarPedido')
        ->with(compact('consultaProveedor'))
        ->with(compact('consultaArticulos'))
        ->with(compact('consultaCOmics'));
    }
}
