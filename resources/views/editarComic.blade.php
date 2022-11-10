@extends('template')
@section('titulo')
    AgregarComic
@stop
@section('contenido')
    {{-- SweetAlert --}}

    @if (session()->has('confirmacion'))
        {!! "<script>Swal.fire(
                'Correcto!',
                'Cómic actualizado',
                'success'
              )</script>" !!}
    @endif


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
              <div class="display-3 mt-3 mb-5 text-center">Actualizar Cómic</div>
              <form action="validarComicActualizar" method="POST">
                @csrf
                <div class="container">
                  <div class="mb-3">
                    <label for="nombre">Nombre</label>
                    <input
                      id="nombre"
                      type="text"
                     
                      name="txtNOMBRE"
                      class="form-control"
                      value="Comic de prueba 1"
                    />
                    <p class="text-primary fst-italic">{{ $errors->first('txtNOMBRE') }}</p>
                  </div>
                  <div class="mb-3">
                    <label for="edicion">Edición:</label>
                    <input
                      id="edicion"
                      type="text"
               
                      name="txtEDICION"
                      class="form-control"
                      value="2030"
                    />
                    <p class="text-primary fst-italic">{{ $errors->first('txtEDICION') }}</p>
                  </div>
                  <div class="mb-3">
                    <label for="compañia">Compañía:</label>
                    <input
                      id="compañia"
                      type="text"
                    
                      name="txtCOMPAÑIA"
                      class="form-control"
                      value="Cómics MX"
                    />
                    <p class="text-primary fst-italic">{{ $errors->first('txtCOMPAÑIA') }}</p>
                  </div>
                  <div class="mb-3">
                    <label for="cantidad">Cantidad:</label>
                    <input
                      id="cantidad"
                      type="text"
                      
                      name="txtCANTIDAD"
                      class="form-control"
                      value="20"
                    />
                    <p class="text-primary fst-italic">{{ $errors->first('txtCANTIDAD') }}</p>
                  </div>
                  <div class="mb-3">
                    <label for="precioCompra">Precio de compra:</label>
                    <input
                      id="precioCompra"
                      type="text"
                      
                      name="txtPRECIOCOMPRA"
                      class="form-control"
                      value="$$$"
                    />
                    <p class="text-primary fst-italic">{{ $errors->first('txtPRECIOCOMPRA') }}</p>
                  </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">
                            Editar Cómic
                        </button>
                    </div>
                </div>
            </form>
          </font>
            </div>
          </div>
    </div>

   

@stop
