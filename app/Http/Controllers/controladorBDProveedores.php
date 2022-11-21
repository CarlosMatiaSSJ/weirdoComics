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
        //
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
        DB::table('proveedores')->insert(["nombreProveedores" => $request->input('txtNOMBRE'),
        "contactoProveedores" => $request->input('txtCONTACTO')
    ]);
    return redirect('proveedores')->with('confirmacion','confirmarProveedor');
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
