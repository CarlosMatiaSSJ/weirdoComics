@extends('template')
@section('titulo')
    Inventario
@stop
@section('contenido')

{{-- SweetAlert --}}

    {{-- Agregar pedido --}}
    
{{--
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
    <div class="display-3 mt-3 mb-2 text-center " style="color: white"><font face="Comic Sans MS,arial,verdana">Inventario </div>
<h3 class="text-light text-center mb-5"> Cómics & Artículos</h3>
     


<div class="container">
  
  <form class="d-flex">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
  </form>

    <table class="table table-success table-striped mt-3">
        <thead>
          <tr>
            <td>Proveedor:</td>
            <td>Mercancía:</td>
            <td>Contacto:</td>
            
          </tr>
        </thead>
    
        <tbody>
          <tr>
            <td>Comics Mx</td>
            <td>Comic de temporada </td>
            <td> 4422565461</td>
          
          </tr>
          <tr>
            <td>Comics Sur</td>
            <td> Comic de temporada </td>
            <td> 6546546589 </td>
           
          </tr>
          <tr>
            <td> Comics Norte</td>
            <td> Comic de temporada </td>
            <td> 6545646545</td>
            
          </tr>
        </tbody>
      </font>
    </table>
</div>
</div>

   {{--
<div class="container">
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>

  </li>
  <li class="nav-item">
    


  </li>
  
</ul>
</div>--}}




    






@stop
