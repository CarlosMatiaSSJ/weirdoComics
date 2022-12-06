@extends('template')
@section('titulo')
    Artículos
@stop
@section('contenido')
    {{-- Actualización de comics --}}
    @if (session()->has('actualizacion'))
        {!! "<script>Swal.fire(
                'Correcto!',
                'Usuario actualizado',
                'success'
              )</script>" !!}
    @endif

    {{-- Agregar Comic --}}

    @if (session()->has('confirmacion'))
        {!! "<script>Swal.fire(
                'Correcto!',
                'Usuario agregado',
                'success'
              )</script>" !!}
    @endif

    @if (session()->has('eliminacion'))
        {!! "<script>Swal.fire(
                'Correcto!',
                'Usuario eliminado',
                'success'
              )</script>" !!}
    @endif

    {{-- Manejo de errores --}}



    {{-- Nav --}}
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index"><img id="icono" src="{{ asset('imgs/comic.png') }}"></a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Menú Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" type="button" data-bs-toggle="modal" data-bs-target="#agregarUsuario" >Agregar usuario</a>

                    </li>
                </ul>
            </div>
        </div>
    </nav>
@include('agregarUsuario')
    {{-- Tabla de comics --}}


    <div class="display-3 mt-5 mb-5 text-center " style="color: white">
        <font face="Comic Sans MS,arial,verdana">Usuarios registrados
    </div>

    <div class="container ">
        <table class="table table-success table-striped mt-3">
            <thead>
                <tr>
                    <td>Usuario:</td>
                    
                    <td>Acción:</td>
                </tr>
            </thead>
            @foreach ($consultaUsuarios as $usuario)
                <tbody>
                    <tr>
                        <td>{{ $usuario->user }}</td>
                      
                        <td>
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editarUsuario{{$usuario->id}}">
                                Actualizar
                            </button>
                                <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarUsuario{{$usuario->id}}">
                                 Eliminar
                             </button>
                        </td>
                        
                    </tr>
                </tbody>
            @include('eliminarUsuario')
            @include('editarUsuario')
            @endforeach
            </font>
        </table>
    </div>
    










@stop
