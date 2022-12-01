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
                <a class="nav-link active" aria-current="page" href="{{route('index')}}">Menú Principal</a>
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
              <form action="{{route('guardarProveedor')}}" method="POST">
                @csrf
                <div class="container">

                  <div class="mb-3">
                    <label for="empresa">Empresa:</label>
                    <input
                      id="empresa"
                      type="text"
                     
                      name="empresa"
                      class="form-control"
                      value= "{{old('empresa')}}"
                    />
                    <p class="text-primary fst-italic">{{ $errors->first('empresa') }}</p>
                  </div>


                  <div class="mb-3">
                    <label for="direccion">Dirección:</label>
                    <input
                      id="direccion"
                      type="text"
               
                      name="direccion"
                      class="form-control"
                      value= "{{old('direccion')}}"
                    />
                    <p class="text-primary fst-italic">{{ $errors->first('direccion') }}</p>
                  </div>

                  <div class="mb-3">
                    <label for="pais">País:</label>
                    <input
                      id="pais"
                      type="text"
                     pais
                      name="pais"
                      class="form-control"
                      value= "{{old('pais')}}"
                    />
                    <p class="text-primary fst-italic">{{ $errors->first('pais') }}</p>
                  </div>

                  <div class="mb-3">
                    <label for="contacto">Contacto:</label>
                    <input
                      id="contacto"
                      type="text"
                     
                      name="contacto"
                      class="form-control"
                      value= "{{old('contacto')}}"
                    />
                    <p class="text-primary fst-italic">{{ $errors->first('contacto') }}</p>
                  </div>


                  <div class="mb-3">
                    <label for="noFijo">No. Fijo:</label>
                    <input
                      id="noFijo"
                      type="text"
                     
                      name="noFijo"
                      class="form-control"
                      value= "{{old('noFijo')}}"
                    />
                    <p class="text-primary fst-italic">{{ $errors->first('noFijo') }}</p>
                  </div>


                  <div class="mb-3">
                    <label for="noCelular">No. Celular:</label>
                    <input
                      id="noCelular"
                      type="text"
                     
                      name="noCelular"
                      class="form-control"
                      value= "{{old('noCelular')}}"
                    />
                    <p class="text-primary fst-italic">{{ $errors->first('noCelular') }}</p>
                  </div>

                  <div class="mb-3">
                    <label for="correo">Correo:</label>
                    <input
                      id="correo"
                      type="text"
                     
                      name="correo"
                      class="form-control"
                      value= "{{old('correo')}}"
                    />
                    <p class="text-primary fst-italic">{{ $errors->first('correo') }}</p>
                  </div>
                  
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">
                            Agregar Proveedor
                        </button>
                    </div>
                </div>
            </form>
          </font>
            </div>
          </div>
    </div>

   

@stop
