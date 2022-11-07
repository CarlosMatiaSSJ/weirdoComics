@extends('template')
@section('titulo')
    Menú
@stop
@section('contenido')

@if (session()->has('confirmacion'))
{!! "<script>Swal.fire(
        'Correcto!',
        'Bienvenido!',
        'success'
      )</script>" !!}
@endif


    {{-- Manejo de errores --}}




    {{-- Menú principal --}}
    <nav class="navbar ">
        <div class="container-fluid">
          <form>
            <button class="btn btn-light" type="submit">Punto de venta</button>
          </form>
        </div>
    </nav>



    <div class="container mt-5">
        <div class="card card-body mt-3" id="cardMenú">
            <div class="display-3 mt-3 mb-5 text-center" style="color: black;"> Menú </div>
            <form action="comics">
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary mb-3">
                        Comics
                    </button>
                </div>
            </form>
            <form action="articulos">
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary mb-3">
                        Artículos
                    </button>
                </div>
            </form>
            <form action="NOMBRERUTA">
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary mb-3">
                        Inventario
                    </button>
                </div>
            </form>
            <form action="NOMBRERUTA">
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary mb-3">
                        Pedidos
                    </button>
                </div>
            </form>
        </div>
    </div>






@stop
