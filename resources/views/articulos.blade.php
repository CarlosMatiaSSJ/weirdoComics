@extends('template')
@section('titulo')
    Artículos
@stop
@section('contenido')
    {{-- Actualización de comics --}}
    @if (session()->has('actualizacion'))
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
            <a class="navbar-brand" href="index"><img id="icono" src="{{ asset('imgs/comic.png') }}"></a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Menú Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('agregarArticulo') }}">Agregar Artículo</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Tabla de comics --}}


    <div class="display-3 mt-5 mb-5 text-center " style="color: white">
        <font face="Comic Sans MS,arial,verdana">Inventario Artículos
    </div>

    <div class="container ">
        <table class="table table-success table-striped mt-3">
            <thead>
                <tr>
                    <td>Artículo:</td>
                    <td>Existencia:</td>
                    <td>Precio de Venta:</td>
                    <td>Acción:</td>
                </tr>
            </thead>
            @foreach ($consultaArticulos as $articulo)
                <tbody>
                    <tr>
                        <td>{{ $articulo->tipoArticulo }}</td>
                        <td>{{ $articulo->cantidadArticulo }} </td>
                        <td>{{ $articulo->precioVentaArticulo }} </td>
                        <td>
                            <a href="editarArticulo" class="btn btn-warning">Actualizar</a>
                            <button onclick="borrarArticulo()" class="btn btn-danger"> Borrar </button>
                        </td>
                    </tr>
                </tbody>
            @endforeach
            </font>
        </table>
    </div>











@stop
