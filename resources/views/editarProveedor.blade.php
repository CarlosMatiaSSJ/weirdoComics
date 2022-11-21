@extends('template')
@section('titulo')
    Agregar Proveedor
@stop
@section('contenido')
    {{-- SweetAlert --}}

  


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
              <div class="display-3 mt-3 mb-5 text-center">Nuevo Proveedor</div>
              <form action="validarActualizacionProveedor" method="POST">
                @csrf
                <div class="container">
                  <div class="mb-3">
                    <label for="nombre">Nombre</label>
                    <input
                      id="nombre"
                      type="text"
                     
                      name="txtNOMBRE"
                      class="form-control"
                      value= "aaaa"
                    />
                    <p class="text-primary fst-italic">{{ $errors->first('txtNOMBRE') }}</p>
                  </div>
                  <div class="mb-3">
                    <label for="contacto">Contacto:</label>
                    <input
                      id="contacto"
                      type="number"
               
                      name="txtCONTACTO"
                      class="form-control"
                      value= "11111"
                    />
                    <p class="text-primary fst-italic">{{ $errors->first('txtCONTACTO') }}</p>
                  </div>
                  
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">
                            Actualizar Proveedor
                        </button>
                    </div>
                </div>
            </form>
          </font>
            </div>
          </div>
    </div>

   

@stop
