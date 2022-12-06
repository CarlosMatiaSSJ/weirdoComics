@extends('template')
 
@section('titulo')
    Menú  
@stop

@section('contenido')
@if (session()->has('confirmacion'))
        {!! "<script>Swal.fire(
                'Correcto!',
                'Bienvenido',
                'success'
              )</script>" !!}
    @endif


    {{-- Manejo de errores --}}




    {{-- Menú principal --}}
    <div class=" mt-2">
    <nav class="navbar">
        <div class="container-fluid">
          <form>
            <a href="pV" class="btn btn-light"> Punto de venta</a>
          </form>
        </div>
    </nav>
</div>





    <div class="container mt-5">
        <div class="card card-body mt-3" id="cardMenú" >
            
                
           
            <div class="display-3 mt-3 mb-5 text-center" style="color: black;"><font face="Comic Sans MS,arial,verdana">
                Menú </font> </div>
               
                <form action="{{route('usuarios')}}">
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary mb-3">
                            Usuarios
                        </button>
                    </div>
                </form>
            <form action="{{route('comics')}}">
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary mb-3">
                        Comics
                    </button>
                </div>
            </form>
            <form action="{{route('articulos')}}">
                <div class="d-grid gap-2" >
                    <button type="submit" class="btn btn-primary mb-3" >
                        Artículos
                    </button>
                </div>
            </form>
            <form action="{{route('proveedores')}}">
                <div class="d-grid gap-2">
                    <button  type="submit" class="btn btn-primary mb-3">
                        Proveedores
                    </button>
                </div>
            </form>
        
           
            <form action="inventario">
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary mb-3">
                        Inventario
                    </button>
                </div>
            </form>
            
            <form action="{{route('logout')}}">
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-danger mb-3">
                        Cerrar Sesión
                    </button>
                </div>
            </form>
        </div>
       
        
    </div>






@stop