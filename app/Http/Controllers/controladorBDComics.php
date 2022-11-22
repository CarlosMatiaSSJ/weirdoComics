<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorWeirdoAgregarComic;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class controladorBDComics extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        return view('agregarComic', compact('consultaProveedores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validadorWeirdoAgregarComic $request)
    {
        $pv = 1.3;
        DB::table('comics')->insert(["nombreComic" => $request->input('txtNOMBRE'),
        "edicionComic"=>$request->input('txtEDICION'),
        "compañiaComic"=>$request->input('txtCOMPAÑIA'),
        "cantidadComic"=>$request->input('txtCANTIDAD'),
        "precioCompraComic"=>$request->input('txtPRECIOCOMPRA'),
        "precioVentaComic"=>$request->input('txtPRECIOCOMPRA')*$pv,
        "fechaIngresoComic"=>$request->input('txtFECHAINGRESO'),
        "idProveedor_detalle"=>$request->input('txtPROVEEDOR')
    ]);
    return redirect('cómics/index')->with('confirmacion','confirmarComic');
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
}
