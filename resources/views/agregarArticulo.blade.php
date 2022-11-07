@extends('template')
@section('titulo')
    Agregar Artículo
@stop
@section('contenido')
    {{-- SweetAlert --}}

  


    {{-- Nav --}}
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img id="icono" src="{{asset('imgs/comic.png')}}"></a>
          
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
              <div class="display-3 mt-3 mb-5 text-center">Nuevo Artículo</div>
              <form action="validarArticulo" method="POST">
                @csrf
                <div class="container">
                  <div class="mb-3">
                    <label for="tipo">Tipo</label>
                    <input
                      id="tipo"
                      type="text"
                     
                      name="txtTIPO"
                      class="form-control"
                      value= "{{old('txtTIPO')}}"
                    />
                    <p class="text-primary fst-italic">{{ $errors->first('txtTIPO') }}</p>
                  </div>
                  <div class="mb-3">
                    <label for="marca">Marca:</label>
                    <input
                      id="marca"
                      type="text"
               
                      name="txtMARCA"
                      class="form-control"
                      value= "{{old('txtMARCA')}}"
                    />
                    <p class="text-primary fst-italic">{{ $errors->first('txtMARCA') }}</p>
                  </div>
                  <div class="mb-3">
                    <label for="descripcion">Descripción:</label>
                    <input
                      id="descripcion"
                      type="text"
                    
                      name="txtDESCRIPCION"
                      class="form-control"
                      value= "{{old('txtDESCRIPCION')}}"
                    />
                    <p class="text-primary fst-italic">{{ $errors->first('txtDESCRIPCION') }}</p>
                  </div>
                  <div class="mb-3">
                    <label for="cantidad">Cantidad:</label>
                    <input
                      id="cantidad"
                      type="text"
                      
                      name="txtCANTIDAD"
                      class="form-control"
                      value= "{{old('txtCANTIDAD')}}"
                    />
                    <p class="text-primary fst-italic">{{ $errors->first('txtCANTIDAD') }}</p>
                  </div>
                  <div class="mb-3">
                    <label for="precioCompra">Precio de compra:</label>
                    <input
                      id="precioCompra"
                      type="text"
                      value= "{{old('txtPRECIOCOMPRA')}}"
                      name="txtPRECIOCOMPRA"
                      class="form-control"
                    />
                    <p class="text-primary fst-italic">{{ $errors->first('txtPRECIOCOMPRA') }}</p>
                  </div>
                  <div class="mb-3">
                    <label for="fechaIngreso">Fecha de ingreso:</label>
                    <input
                      id="fechaImgreso"
                      type="date"
                      value= "{{old('txtFECHAINGRESO')}}"
                      name="txtFECHAINGRESO"
                      class="form-control"
                    />
                    <p class="text-primary fst-italic">{{ $errors->first('txtFECHAINGRESO') }}</p>
                  </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">
                            Agregar Artículo
                        </button>
                    </div>
                </div>
            </form>
           
            </div>
          </div>
    </div>

   

@stop
