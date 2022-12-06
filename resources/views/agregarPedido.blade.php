@extends('template')
@section('titulo')
    AgregarPedido
@stop
@section('contenido')






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
                                    <form action="{{route('generarPedido')}}" method="post">
                                      @csrf
                                      @foreach ($consultaComics as $comics)
                                      <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="" aria-label="" name="txtNombreComic{{$comics->idComic}}" disabled value="{{$comics->nombreComic}}">
                                        <span class="input-group-text">Cantidad</span>
                                        <input type="text" class="form-control" placeholder="" aria-label="" required name="txtCantidadComics{{$comics->idComic}}">
                                      </div>
                                      @endforeach
                                      <h3 class="mt-2">Artículos</h3>
                                      @foreach ($consultaArticulos as $articulos)
                                      <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="" aria-label="" disabled value="{{$articulos->descripcionArticulo}}">
                                        <span class="input-group-text">Cantidad</span>
                                        <input type="text" class="form-control" placeholder="" aria-label="" required name="txtCantidadArticulos">
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
