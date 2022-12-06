@extends('template')
@section('titulo')
    Punto de Venta
@endsection



@section('contenido')
    @if (session()->has('notFound'))
        "
        <script>
            Swal.fire(
                'Error!',
                'Producto NO encontrado',
                'error'
            )
        </script>"
    @endif

    @if (session()->has('ventaTerminada'))
        "
        <script>
            Swal.fire(
                'Correcto!',
                'Se ha registrado la venta!',
                'success'
            )
        </script>"
    @endif
    @if (session()->has('ventaCancelada'))
        "
        <script>
            Swal.fire(
                'Venta Cancelada!',
                'Se ha cancelado la venta',
                'error'
            )
        </script>"
    @endif


    @if (session()->has('mensaje'))
        "
        <script>
            Swal.fire(
                'Error!',
                'Producto NO ccdd',
                'error'
            )
        </script>"
    @endif

    @if (session()->has('noStock'))
        "
        <script>
            Swal.fire(
                'Error!',
                'Producto sin Stock',
                'error'
            )
        </script>"
    @endif
    {{-- Nav --}}
    <nav class="navbar navbar-expand-lg bg-light mb-3">

        <div class="container-fluid ">
            <a class="navbar-brand " href="index"><img id="icono" src="{{ asset('imgs/comic.png') }}"></a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index">Menú Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/cancelarVenta">Cancelar Venta</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <div class="container mt-5">
        <div class="card card-body mt-3" id="cardMenú">
            <div class="display-3 mt-3 mb-5 text-center" style="color: black;">
                <font face="Comic Sans MS,arial,verdana">
                    Punto de Venta </font>
            </div>



            <div class="container text-center">

                <div class="row text-center" id="productoss">
                    <div class="col-md-6">
                        <form action="{{ route('agregarProductoVenta') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="codigo">Producto: </label>
                                <input id="codigo" autocomplete="off" autofocus name="codigo" type="text"
                                    class="form-control" placeholder="Producto">
                            </div>
                        </form>
                    </div>
                </div>

                <div id="tablaProductos" class="mt-4">
                    <table class="table table-success table-striped">
                        <thead>
                            <tr>
                                <td>Cantidad:</td>
                                <td>Producto:</td>
                                <td>Precio Unitario:</td>

                            </tr>
                        </thead>

                        <tbody>
                            
                            @if (session('productos') !== null)
                                @foreach (session('productos') as $producto)
                                    <tr>
                                        <td>{{ $producto->cantidadComic }}</td>
                                        <td>{{ $producto->nombreComic }}</td>
                                        <td>{{ $producto->precioVentaComic }}</td>
                                    </tr>
                                    
                                @endforeach
                            @endif

                            @if(session('productosArticulo')!== null)
                                @foreach (session('productosArticulo') as $productoArticulo)
                                <tr>
                                    <td>{{ $productoArticulo->cantidadArticulo }}</td>
                                    <td>{{ $productoArticulo->descripcionArticulo }}</td>
                                    <td>{{ $productoArticulo->precioVentaArticulo }}</td>
                                </tr>
                                @endforeach
                            @endif

                          
                            
                        </tbody>
                    </table>
                </div>
                



                <div class="container">
                    <div class="card card-body mt-4" id="importe">
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <h6>SUBTOTAL:</h6>
                                </div>
                                <div>
                                    <h6>$0.00</h6>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <h6>TOTAL:</h6>
                                </div>
                                <div class="container">
                                    <h6>${{ $total }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if (session('productos') !== null or session('productosArticulo') !== null)
                        <div class="form-group mt-3">

                            <form action="/venta" method="post">
                                @csrf
                                <button name="accion" value="terminar" type="submit" class="btn btn-success">Realizar
                                    Venta </button>
                            </form>



                        </div>
                    @endif


                </div>






            </div>

        @endsection
