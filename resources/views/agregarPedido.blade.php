@extends('template')
@section('titulo')
    AgregarPedido
@stop
@section('contenido')
    

    
  


    {{-- Nav --}}
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="index"><img id="icono" src="{{asset('imgs/comic.png')}}"></a>
          
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index">Menú Principal</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    {{-- Manejo de errores --}}




    {{-- Formulario agregar cómic --}}
    <div class="container">
        <div class="col-md-6 offset-md-3">
            <div class="card card-body mt-5">
              <font face="Comic Sans MS,arial,verdana">
              <div class="display-3 mt-3 mb-5 text-center">Nuevo Pedido</div>
              <form action="validarPedido" method="POST">
                @csrf
                <div class="container">
                  <div class="mb-3">
                    <label for="proveedor">Proveedor:</label>
                    <input
                      id="proveedor"
                      type="text"
                     
                      name="txtProveedor"
                      class="form-control"
                      value= "{{old('txtProveedor')}}"
                    />
                    <p class="text-primary fst-italic">{{ $errors->first('txtProveedor') }}</p>
                  </div>
                  <div class="mb-3">
                    <label for="mercancia">Mercancía:</label>
                    <input
                      id="mercancia"
                      type="text"
               
                      name="txtMercancia"
                      class="form-control"
                      value= "{{old('txtMercancia')}}"
                    />
                    <p class="text-primary fst-italic">{{ $errors->first('txtMercancia') }}</p>
                  </div>
                  <div class="mb-3">
                    <label for="contacto">Contacto:</label>
                    <input
                      id="contacto"
                      type="text"
                    
                      name="txtContacto"
                      class="form-control"
                      value= "{{old('txtContacto')}}"
                    />
                    <p class="text-primary fst-italic">{{ $errors->first('txtContacto') }}</p>
                  </div>
                  
                  <div class="mb-3">
                    <label for="FechaPedido">Fecha pedido:</label>
                    <input
                      id="fechaPedido"
                      type="date"
                      value= "{{old('txtFechaP')}}"
                      name="txtFechaP"
                      class="form-control"
                    />
                    <p class="text-primary fst-italic">{{ $errors->first('txtFechaP') }}</p>
                  </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">
                            Agregar Pedido
                        </button>
                    </div>
                </div>
            </form>
          </font>
            </div>
          </div>
    </div>

   

@endsection
