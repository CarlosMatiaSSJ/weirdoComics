<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorWeirdoAgregarArticulo;
use App\Http\Requests\validadorWeirdoActualizarArticulo;


use Illuminate\Http\Request;
use DB;

class controladorBDArticulos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultaArticulos = DB::table('articulos')->get();
        return view('articulos', compact('consultaArticulos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //Consulta de proveedores para mostrarlos en combobox 
         $consultaProveedores = DB::table('proveedores')->get();
         return view('agregarArticulo', compact('consultaProveedores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validadorWeirdoAgregarArticulo $request)
    {
        $pv = 1.4;
        DB::table('articulos')->insert([
        "tipoArticulo" => $request->input('txtTIPO'),
        "marcaArticulo"=>$request->input('txtMARCA'),
        "descripcionArticulo"=>$request->input('txtDESCRIPCION'),
        "cantidadArticulo"=>$request->input('txtCANTIDAD'),
        "precioCompraArticulo"=>$request->input('txtPRECIOCOMPRA'),
        "precioVentaArticulo"=>$request->input('txtPRECIOCOMPRA')*$pv,
        "fechaIngresoArticulo"=>$request->input('txtFECHAINGRESO'),
        "idProveedor_detalleArticulo"=>$request->input('txtPROVEEDOR')
    ]);
    return redirect('artículos/index')->with('articuloAgregado','confirmarArtículo');
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
        $consultaProveedores = DB::table('proveedores')->get();
        $consultaID = DB::table('articulos')->where('idArticulo',$id)->first();
        return view('editarArticulo', compact('consultaID'), compact('consultaProveedores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validadorWeirdoActualizarArticulo $request, $id)
    {
        $pv = 1.4;
        DB::table('articulos')->where('idArticulo',$id)->update([

            "tipoArticulo" => $request->input('txtTIPO'),
            "marcaArticulo"=>$request->input('txtMARCA'),
            "descripcionArticulo"=>$request->input('txtDESCRIPCION'),
            "cantidadArticulo"=>$request->input('txtCANTIDAD'),
            "precioCompraArticulo"=>$request->input('txtPRECIOCOMPRA'),
            "precioVentaArticulo"=>$request->input('txtPRECIOCOMPRA')*$pv,
            "fechaIngresoArticulo"=>$request->input('txtFECHAINGRESO'),
            "idProveedor_detalleArticulo"=>$request->input('txtPROVEEDOR')
        ]);
        return redirect('artículos/index')->with('actualizacion','abc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('articulos')->where('idArticulo',$id)->delete();
        return redirect('artículos/index')->with('eliminacion','abc');
    }
}
