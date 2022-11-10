@extends('template')
@section('titulo')
    Comics
@stop
@section('contenido')
{{-- Actualización de comics --}}
@if (session()->has('actualizacion'))
{!! "<script>Swal.fire(
        'Correcto!',
        'Cómic actualizado',
        'success'
      )</script>" !!}
@endif

{{-- Agregar Comic --}}

@if (session()->has('comicAgregado'))
{!! "<script>Swal.fire(
        'Correcto!',
        'Cómic agregado',
        'success'
      )</script>" !!}
@endif

    {{-- Manejo de errores --}}



    {{-- Nav --}}
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="index"><img id="icono" src="{{asset('imgs/comic.png')}}"></a>
          
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index">Menú Principal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="agregarComic">Agregar Comic</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    {{-- Tabla de comics --}}
  

    <div class="display-3 mb-5 text-center mt-5" style="color: white"><font face="Comic Sans MS,arial,verdana">Inventario Comics</div>

<div class="container">
    <table class="table table-success table-striped mt-3">
        <thead>
          <tr>
            <td>Comic:</td>
            <td>Existencia:</td>
            <td>Precio:</td>
            <td>Acción:</td>
          </tr>
        </thead>
    
        <tbody>
          <tr>
            <td>Comic 1</td>
            <td> 10 </td>
            <td> $50</td>
            <td>
              <a href="editarComic" class="btn btn-warning">Actualizar</a>
              <button onclick="borrar()" class="btn btn-danger"> Borrar </button>
            </td>
          </tr>
          <tr>
            <td>Comic 2</td>
            <td> 30 </td>
            <td> $10</td>
            <td>
              <a href="editarComic" class="btn btn-warning">Actualizar</a>
            <button onclick="borrar()" class="btn btn-danger"> Borrar </button>
            </td>
          </tr>
          <tr>
            <td>Comic 3</td>
            <td> 120 </td>
            <td> $5</td>
            <td>
              <a href="editarComic" class="btn btn-warning">Actualizar</a>
              <button onclick="borrar()" class="btn btn-danger"> Borrar </button>
            </td>
          </tr>
        </tbody>
      </font>
    </table>
</div>




    






@stop
