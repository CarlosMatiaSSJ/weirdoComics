@extends('template')
@section('titulo')
    Inventario
@stop
@section('contenido')

    {{-- SweetAlert --}}

    {{-- Agregar pedido --}}

    {{--
      @if (session()->has('pedidoAgregado'))
      {!! "<script>Swal.fire(
              'Correcto!',
              'Pedido agregado',
              'success'
            )</script>" !!}
  @endif

    {{-- Manejo de errores --}}



    {{-- Nav --}}
    <nav class="navbar navbar-expand-lg bg-light mb-3">

        <div class="container-fluid ">
            <a class="navbar-brand " href="index"><img id="icono" src="{{ asset('imgs/comic.png') }}"></a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Menú Principal</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>



    {{-- Tabla de comics --}}

    <div class="container mt-5">
        <div class="display-3 mt-3 mb-2 text-center " style="color: white">
            <font face="Comic Sans MS,arial,verdana">Inventario
        </div>
        <h3 class="text-light text-center mb-5"> Cómics & Artículos</h3>


        {{-- Barra búsqueda --}}
        <form class="d-flex float-right" role="search">
          <input class="form-control me-2" type="search" placeholder="Filtrar" aria-label="Search" name="filtrar" value="{{$filtrar}}">
          <button class="btn btn-light" type="submit">Filtrar</button>
        </form>


        {{-- Card con cómics y artículos --}}
        <div class="container mt-4">
            <div class="card">
                <div class="card-body">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col">
                                Cómics
                                <table class="table table-success table-striped mt-3">
                                    <thead>
                                        <tr>
                                            <td>Comic:</td>
                                            <td>Existencia:</td>
                                            <td>Precio de Venta:</td>
                                        </tr>
                                    </thead>
                                    @foreach ($consultaComics as $comics)
                                        
                                    
                                    <tbody>
                                        <tr>
                                            <td>{{$comics->nombreComic}}</td>
                                           
                                            <td class="{{ ($comics->cantidadComic == 0) ? 'table-danger':'' }}">{{ $comics->cantidadComic }}</td>
                                            <td>{{$comics->precioVentaComic}}</td>
                                        </tr>
                                    </tbody>
                                    @endforeach

                                </table>
                            </div>

                            <div class="col">
                                Artículos
                                <table class="table table-success table-striped mt-3">
                                    <thead>
                                        <tr>
                                            <td>Artículo:</td>
                                            <td>Existencia:</td>
                                            <td>Precio de Venta:</td>
                                        </tr>
                                    </thead>
                                    @foreach ($consultaArticulos as $articulo)
                                        
                                    
                                    <tbody>
                                        <tr>
                                            <td>{{$articulo->descripcionArticulo}}</td>
                                            <td class="{{ ($articulo->cantidadArticulo == 0) ? 'table-danger':'' }}">{{$articulo->cantidadArticulo}}</td>
                                            <td>{{$articulo->precioVentaArticulo}}</td>
                                        </tr>
                                    </tbody>
                                    @endforeach


                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--
<div class="container">
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>

  </li>
  <li class="nav-item">
    


  </li>
  
</ul>
</div> --}}











    @stop
