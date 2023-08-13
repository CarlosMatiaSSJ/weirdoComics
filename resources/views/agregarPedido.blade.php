@extends('template')
@section('titulo')
    AgregarPedido
@stop
@section('contenido')
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif






    {{-- Nav --}}
  
    {{-- Manejo de errores --}}




    {{-- Formulario agregar cómic --}}
    <div class="container">
        <div class="col-md-6 offset-md-3">
            <div class="card card-body mt-5">
                <font face="Comic Sans MS,arial,verdana">
                    <div class="display-3 mt-3 mb-5 text-center">Nuevo Pedido</div>
                   
                        <div class="container">
                            <div class="mb-3">
                                <label for="proveedor">Proveedor:</label>
                             
                                <input id="proveedor" type="text" disabled name="txtProveedor" class="form-control"
                                    value="{{ $consultaProveedor->empresaProveedor }}" />
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <h3>Cómics</h3>
                                    <form action="{{route('generarPedido', $consultaProveedor->idProveedor)}}" method="post">
                                      @csrf
                                      @foreach ($consultaComics as $comics)
                                      <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="" aria-label="" name="txtNombreComic" readonly value="{{$comics->nombreComic}}">
                                        <span class="input-group-text">Cantidad</span>
                                        <input type="number" class="form-control" placeholder="" aria-label=""  name="txtCantidadComics">
                                      </div>
                                      @endforeach
                                      <h3 class="mt-2">Artículos</h3>
                                      @foreach ($consultaArticulos as $articulos)
                                      <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="" aria-label="" name="txtNombreArtículo" readonly value="{{$articulos->descripcionArticulo}}">
                                        <span class="input-group-text">Cantidad</span>
                                        <input type="number" class="form-control" placeholder="" aria-label=""  name="txtCantidadArticulos">
                                      </div>
                                      @endforeach
                                      <button type="submit" class="btn btn-success">Enviar Pedido</button>
                                    </form>
                                </div>
                            </div>




                        </div>        
                    </div>
        
                </font>
            </div>
        </div>
    </div>



@endsection
