@extends('template')
@section('titulo')
    Pedidos
@stop
@section('contenido')

{{-- SweetAlert --}}

    {{-- Agregar pedido --}}
    
  @if (session()->has('pedidoAgregado'))
      {!! "<script>Swal.fire(
              'Correcto!',
              'Pedido agregado',
              'success'
            )</script>" !!}
  @endif

    {{-- Manejo de errores --}}



    {{-- Nav --}}
    <nav class="navbar navbar-expand-lg bg-light mb-3">
      
        <div class="container-fluid ">
          <a class="navbar-brand " href="index"><img id="icono" src="{{asset('imgs/comic.png')}}"></a>
          
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index">Menú Principal</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>

      

    {{-- Tabla de comics --}}
  
<div class="container mt-5">
    <div class="display-3 mt-3 mb-5 text-center " style="color: white"><font face="Comic Sans MS,arial,verdana">Pedidos</div>

      


<div class="container">
    <table class="table table-success table-striped mt-3">
        <thead>
          <tr>
            <td>Proveedor:</td>
            <td>Mercancía:</td>
            <td>Contacto:</td>
            <td>Generar ticket:</td>
          </tr>
        </thead>
    
        <tbody>
          
        </tbody>
      </font>
    </table>
</div>
</div>




    






@stop
