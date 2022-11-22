@extends('template')
@section('titulo')
    Proveedores
@stop
@section('contenido')
{{-- Actualización de comics --}}
@if (session()->has('actualizacion'))
{!! "<script>Swal.fire(
        'Correcto!',
        'Proveedor actualizado',
        'success'
      )</script>" !!}
@endif

{{-- Agregar Comic --}}

@if (session()->has('confirmacion'))
{!! "<script>Swal.fire(
        'Correcto!',
        'Proveedor agregado',
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
                <a class="nav-link active" aria-current="page" href="{{route('index')}}">Menú Principal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('agregarProveedor')}}">Agregar Proveedor</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    {{-- Tabla de comics --}}
  

    <div class="display-3 mb-5 text-center mt-5" style="color: white"><font face="Comic Sans MS,arial,verdana">Proveedores</div>

    

<div class="container">
  
    <table class="table table-success table-striped mt-3">
        <thead>
          <tr>
            <td>Proveedor:</td>
            <td>Contacto:</td>
            <td></td>
            <td></td>
          </tr>
        </thead>
        @foreach($consultaProveedores as $proveedores)
        <tbody>
         
          <tr>
            <td>{{$proveedores->nombreProveedores}}</td>
            <td>{{$proveedores->contactoProveedores}} </td>
            <td>
              <button class="btn btn-danger"> Ver Productos </button>
            </td>
            <td>
              <a href="editarProveedor/{{$proveedores->idProveedores}}" class="btn btn-warning">Actualizar</a>
              <button onclick="borrarProveedor()" class="btn btn-danger"> Borrar </button>
            </td>
          </tr>
         
        </tbody>
       @endforeach
      </font>
    </table>
  
</div>

@stop
