<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorWeirdo;



class controladorWeirdo extends Controller
{
    public function confirmarFormulario(validadorWeirdo $req){
        
        return redirect('/')->with('confirmacion','Información Recibida');
     
    }

    public function showLogin(){
        return view('login');
    }

}