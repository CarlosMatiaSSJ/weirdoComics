@extends('template')
@section('titulo')
    Artículos
@stop
@section('contenido')
{{-- Actualización de comics --}}
@if (session()->has('articuloActualizado'))
{!! "<script>Swal.fire(
        'Correcto!',
        'Artículo actualizado',
        'success'
      )</script>" !!}
@endif

{{-- Agregar Comic --}}

@if (session()->has('articuloAgregado'))
{!! "<script>Swal.fire(
        'Correcto!',
        'Artículo agregado',
        'success'
      )</script>" !!}
@endif

    {{-- Manejo de errores --}}



    {{-- Nav --}}
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img id="icono" src="{{asset('imgs/comic.png')}}"></a>
          
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index">Menú Principal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="agregarArticulo">Agregar Artículo</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    {{-- Tabla de comics --}}
  

    <div class="display-3 mt-3 mb-5 text-center " style="color: white">Inventario Artículos</div>

<div >
    <table class="table table-success table-striped mt-3">
        <thead>
          <tr>
            <td>Artículo:</td>
            <td>Existencia:</td>
            <td>Precio:</td>
            <td>Acción:</td>
          </tr>
        </thead>
    
        <tbody>
          <tr>
            <td>Artículo 1</td>
            <td> 10 </td>
            <td> $50</td>
            <td>
              <a href="" class="btn btn-warning">Actualizar</a>
              <button onclick="borrarArticulo()" class="btn btn-danger"> Borrar </button>
            </td>
          </tr>
          <tr>
            <td>Artículo 2</td>
            <td> 30 </td>
            <td> $10</td>
            <td>
              <a href="" class="btn btn-warning">Actualizar</a>
            <button onclick="borrarArticulo()" class="btn btn-danger"> Borrar </button>
            </td>
          </tr>
          <tr>
            <td>Artículo 3</td>
            <td> 120 </td>
            <td> $5</td>
            <td>
              <a href="" class="btn btn-warning">Actualizar</a>
              <button onclick="borrarArticulo()" class="btn btn-danger"> Borrar </button>
            </td>
          </tr>
        </tbody>
    </table>
</div>




    






@stop
