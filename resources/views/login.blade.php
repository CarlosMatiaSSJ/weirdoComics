@extends('template')
@section('titulo')
    Login
@stop
@section('contenido')
    {{-- SweetAlert --}}

    @if (session()->has('confirmacion'))
        {!! "<script>Swal.fire(
                'Correcto!',
                '¡Bienvenido!',
                'success'
              )</script>" !!}
    @endif


    {{-- Manejo de errores --}}




    {{-- Formulario de login --}}

    <div class="display-3 mt-3 mb-5 text-center" style="color: white;"> Weirdo Comics </div>
    <div class="container">
        <div class="card card-body" id="cardLogin">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body" id="cardLogin2">
                        <form action="validarLogin" method='POST'>
                            @csrf
                            <div class="mb-3">
                                <input type="text" name="txtUsuario" placeholder="Usuario" class="form-control mt-5" />
                                <p class="text-primary fst-italic">{{ $errors->first('txtUsuario') }}</p>
                            </div>
                            <div class="mb-3">
                                <input type="password" name="txtContraseña" placeholder="Contraseña" class="form-control" />
                                <p class="text-primary fst-italic">{{ $errors->first('txtContraseña') }}</p>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary mb-3">
                                    Ingresar
                                </button>
                            </div>
                        </form>
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="display-3 mt-3 mb-5 text-center" id="bv" style="color: black;"> Bienvenido </div>
                </div>
            </div>

        </div>

    </div>

@stop
