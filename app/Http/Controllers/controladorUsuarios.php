<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class controladorUsuarios extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultaUsuarios = DB::table('usuarios')->get();
        return view('usuarios')
        ->with(compact('consultaUsuarios'));
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
        DB::table('usuarios')->insert([
            "user"=>$request->input('txtUSUARIO'),
            "password"=>$request->input('txtCONTRASENA'),
            "tipoUsuario"=>$request->input('txtTIPOUSUARIO')
        ]);
        return redirect('usuarios/index')->with('confirmacion','abc');
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
        DB::table('usuarios')->where('id',$id)->update([
            "user"=>$request->input('txtUSUARIO'),
            "tipoUsuario"=>$request->input('txtTIPOUSUARIO')
        ]);
        return redirect('usuarios/index')->with('actualizacion','abc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('usuarios')->where('id',$id)->delete();
        return redirect('usuarios/index')->with('eliminacion','abc');
    }
}
