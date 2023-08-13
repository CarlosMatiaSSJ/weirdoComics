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
    @if (session()->has('eliminacion'))
        {!! "<script>Swal.fire(
                'Correcto!',
                'Cómic eliminado',
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
                        <a class="nav-link" href="{{ route('agregarComic') }}">Agregar Producto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Tabla de comics --}}


    <div class="display-3 mb-5 text-center mt-5" style="color: white">
        <font face="Comic Sans MS,arial,verdana">Inventario Truper
    </div>

    <div class="container">
        <table class="table table-success table-striped mt-3">
            <thead>
                <tr>
                    <td>Producto:</td>
                    <td>Existencia:</td>
                    <td>Precio de Venta:</td>
                    <td>Acción:</td>
                </tr>
            </thead>


            @foreach ($consultaComics as $comics)
                <tbody>
                    <tr>

                        <td>{{ $comics->nombreComic }}</td>
                        <td>{{ $comics->cantidadComic }} </td>
                        <td>{{ $comics->precioVentaComic }} </td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#editarComic{{ $comics->idComic }}">
                                Actualizar
                            </button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#eliminarComic{{ $comics->idComic }}">
                            Eliminar
                        </button>
                            

                        </td>

                    </tr>


                </tbody>
            @include('editarComic')
            @include('eliminarComic')
            @endforeach
            </font>

        </table>

    </div>











@stop
