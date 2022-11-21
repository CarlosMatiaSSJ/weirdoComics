@extends('template')
@section('titulo')
Punto de Venta 
@endsection

@section('contenido')
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


  <div class="container mt-5">
    <div class="card card-body mt-3" id="cardMenú" >
        <div class="display-3 mt-3 mb-5 text-center" style="color: black;"><font face="Comic Sans MS,arial,verdana">
            Punto de Venta </font> </div>
        <form action="">
            <div class="d-grid gap-2">
                
                
            </div>
        </form>



<div class="container text-center">

  <div class="row" id="productoss">
    <div class="col-md-6">
        <h4>Cantidad</h4>
        <input type="number" name="cantidadProducto" placeholder="#">
    </div>
    <div class="col-md-6">
        <h4>Producto</h4>
        <input type="text" name="nombreProducto" >
    </div>
</div>

<div id="tablaProductos" class="mt-4">
    <table class="table table-success table-striped">
      <thead>
        <tr>
          <td>Cantidad:</td>
          <td>Producto:</td>
          <td>Precio:</td>
          <td>Descuento:</td>
          <td>Importe:</td>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>1</td>
          <td>Cómic 1</td>
          <td>$25</td>
          <td>$0</td>
          <td>$25</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Llavero promocional</td>
            <td>$10</td>
            <td>$0</td>
            <td>$20</td>
          </tr>
          <tr>
            <td>1</td>
            <td>Cómic 2</td>
            <td>$15</td>
            <td>$0</td>
            <td>$15</td>
          </tr>
      </tbody>
    </table>
</div>



<div class="container">
    <div class="card card-body mt-4" id="importe">
        <div class="row">
                <div class="col-md-6">
                    <div><h6>SUBTOTAL:</h6></div>
                    <div><h6>$0.00</h6></div>
                </div>
                <div class="col-md-6">
                    <div><h6>TOTAL:</h6></div>
                    <div><h6>$0.00</h6></div>
                </div>
        </div>  
    </div>
    <button type="button" class="btn btn-primary col-md-6 mt-4">C</button>
</div>






</div>

  @endsection