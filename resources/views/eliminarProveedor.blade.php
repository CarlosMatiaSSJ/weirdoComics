<!-- Modal -->
<div class="modal fade" id="eliminarProveedor{{$proveedores->idProveedor}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Proveedor</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h3>¿Seguro que deseas eliminar {{$proveedores->empresaProveedor}}?</h3>
        </div>
        <div class="modal-footer">
            <form action="{{route('destroyProveedor',$proveedores->idProveedor)}}" method="post">
                @csrf
                @method('delete')
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
          
        </div>
      </div>
    </div>
  </div>