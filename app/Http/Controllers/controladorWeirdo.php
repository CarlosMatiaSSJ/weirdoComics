<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorWeirdo;
use App\Http\Requests\validadorWeirdoActualizarComic;
use App\Http\Requests\validadorWeirdoAgregarArticulo;
use App\Http\Requests\validadorWeirdoAgregarComic;
use App\Http\Requests\validadorAgregarArticulo;

class controladorWeirdo extends Controller
{
    public function confirmarFormulario(validadorWeirdo $req)
    {
        return redirect('index')->with('confirmacion', 'Información Recibida');
    }

    public function confirmarComic(validadorWeirdoAgregarComic $req)
    {
        return redirect('comics')->with('comicAgregado', 'comic Recibida');
    }

    public function confirmarActualizacionComic(validadorWeirdoActualizarComic $req)
    {
        return redirect('comics')->with('actualizacion', 'comic Recibida');
    }

    public function confirmarArticulo(validadorWeirdoAgregarArticulo $req)
    {
        return redirect('articulos')->with('articuloAgregado', 'Articulo Recibida');
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

    public function showEditarComic()
    {
        return view('editarComic');
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
