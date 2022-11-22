@extends('template')
@section('titulo')
    AgregarComic
@stop
@section('contenido')
    {{-- SweetAlert --}}




    {{-- Nav --}}
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index"><img id="icono" src="{{ asset('imgs/comic.png') }}"></a>

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
                    <div class="display-3 mt-3 mb-5 text-center">Nuevo Cómic</div>
                    <form action="{{route('guardarComic')}}" method="POST">
                        @csrf
                        <div class="container">
                            <div class="mb-3">
                                <label for="nombre">Nombre</label>
                                <input id="nombre" type="text" name="txtNOMBRE" class="form-control"
                                    value="{{ old('txtNOMBRE') }}" />
                                <p class="text-primary fst-italic">{{ $errors->first('txtNOMBRE') }}</p>
                            </div>
                            <div class="mb-3">
                                <label for="edicion">Edición:</label>
                                <input id="edicion" type="text" name="txtEDICION" class="form-control"
                                    value="{{ old('txtEDICION') }}" />
                                <p class="text-primary fst-italic">{{ $errors->first('txtEDICION') }}</p>
                            </div>
                            <div class="mb-3">
                                <label for="compañia">Compañía:</label>
                                <input id="compañia" type="text" name="txtCOMPAÑIA" class="form-control"
                                    value="{{ old('txtCOMPAÑIA') }}" />
                                <p class="text-primary fst-italic">{{ $errors->first('txtCOMPAÑIA') }}</p>
                            </div>
                            <div class="mb-3">
                                <label for="cantidad">Cantidad:</label>
                                <input id="cantidad" type="text" name="txtCANTIDAD" class="form-control"
                                    value="{{ old('txtCANTIDAD') }}" />
                                <p class="text-primary fst-italic">{{ $errors->first('txtCANTIDAD') }}</p>
                            </div>
                            <div class="mb-3">
                                <label for="precioCompra">Precio de compra:</label>
                                <input id="precioCompra" type="text" value="{{ old('txtPRECIOCOMPRA') }}"
                                    name="txtPRECIOCOMPRA" class="form-control" />
                                <p class="text-primary fst-italic">{{ $errors->first('txtPRECIOCOMPRA') }}</p>
                            </div>
                            <div class="mb-3">
                                <label for="fechaIngreso">Fecha de ingreso:</label>
                                <input id="fechaIngreso" type="date" value="{{ old('txtFECHAINGRESO') }}"
                                    name="txtFECHAINGRESO" class="form-control" />
                                <p class="text-primary fst-italic">{{ $errors->first('txtFECHAINGRESO') }}</p>
                            </div>
                            <div class="mb-3">
                                <label for="proveedorA">Proveedor:</label>
                                
                                <select class="form-select" aria-label="Default select example" name="txtPROVEEDOR">
                                  <option selected disabled></option>
                                  @foreach ($consultaProveedores as $proveedor)
                                  <option value="{{$proveedor->idProveedores}}">{{$proveedor->nombreProveedores}}</option>
                                  @endforeach
                                </select>
                                

                                <p class="text-primary fst-italic">{{ $errors->first('txtPROVEEDOR') }}</p>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">
                                    Agregar Cómic
                                </button>
                            </div>
                        </div>
                    </form>
                </font>
            </div>
        </div>
    </div>



@stop
