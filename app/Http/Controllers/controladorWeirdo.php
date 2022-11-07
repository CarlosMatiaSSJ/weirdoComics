<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorWeirdo;
use App\Http\Requests\validadorWeirdoAgregarComic;

class controladorWeirdo extends Controller
{
    public function confirmarFormulario(validadorWeirdo $req)
    {
        return redirect('/')->with('confirmacion', 'Información Recibida');
    }

    public function confirmarComic(validadorWeirdoAgregarComic $req)
    {
        return redirect('agregarComic')->with('confirmacion', 'comic Recibida');
    }

    public function showLogin()
    {
        return view('login');
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

}
