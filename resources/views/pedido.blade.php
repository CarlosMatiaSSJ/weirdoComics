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

      <div class="container-fluid mt-5">
        <form>
          <a href="agregarPedido" class="btn btn-light" style="color: rgb(37, 22, 77);"> Agregar Pedido </a>
        </form>
      </div>


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
          <tr>
            <td>Comics Mx</td>
            <td>Comic de temporada </td>
            <td> 4422565461</td>
            <td>
              <a href="" class="btn btn-primary">TICKET</a>
            </td>
          </tr>
          <tr>
            <td>Comics Sur</td>
            <td> Comic de temporada </td>
            <td> 6546546589 </td>
            <td>
              <a href="" class="btn btn-primary">TICKET</a>
            </td>
          </tr>
          <tr>
            <td> Comics Norte</td>
            <td> Comic de temporada </td>
            <td> 6545646545</td>
            <td>
              <a href="" class="btn btn-primary">TICKET</a>
            </td>
          </tr>
        </tbody>
      </font>
    </table>
</div>
</div>




    






@stop
