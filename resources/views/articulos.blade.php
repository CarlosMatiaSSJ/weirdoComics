@extends('template')

@section('titulo')
    Artículos
@stop
@section('contenido')
{{-- Actualización de comics --}}
@if (session()->has('actualizacion'))
{!! "<script>Swal.fire(
        'Correcto!',
        'Artículo actualizado',
        'success'
      )</script>" !!}
@endif

{{-- Agregar Comic --}}

@if (session()->has('articuloAgregado'))
{!! "<script>Swal.fire(
        'Correcto!',
        'Artículo agregado',
        'success'
      )</script>" !!}
@endif

    {{-- Manejo de errores --}}



    {{-- Nav --}}
    @extends('navbar')

    {{-- Tabla de comics --}}
  

    <div class="display-3 mt-5 mb-5 text-center " style="color: white"><font face="Comic Sans MS,arial,verdana">Inventario Artículos</div>

<div class="container ">
    <table class="table table-success table-striped mt-3">
        <thead>
          <tr>
            <td>Artículo:</td>
            <td>Existencia:</td>
            <td>Precio:</td>
            <td>Acción:</td>
          </tr>
        </thead>
    
        <tbody>
          <tr>
            <td>Artículo 1</td>
            <td> 10 </td>
            <td> $50</td>
            <td>
              <a href="editarArticulo" class="btn btn-warning">Actualizar</a>
              <button onclick="borrarArticulo()" class="btn btn-danger"> Borrar </button>
            </td>
          </tr>
          <tr>
            <td>Artículo 2</td>
            <td> 30 </td>
            <td> $10</td>
            <td>
              <a href="editarArticulo" class="btn btn-warning">Actualizar</a>
            <button onclick="borrarArticulo()" class="btn btn-danger"> Borrar </button>
            </td>
          </tr>
          <tr>
            <td>Artículo 3</td>
            <td> 120 </td>
            <td> $5</td>
            <td>
              <a href="editarArticulo" class="btn btn-warning">Actualizar</a>
              <button onclick="borrarArticulo()" class="btn btn-danger"> Borrar </button>
            </td>
          </tr>
        </tbody>
      </font>
    </table>
</div>




    






@stop
