<!-- Modal -->
<div class="modal fade" id="eliminarUsuario{{$usuario->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Usuario</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h1>¿Seguro que quieres eliminar {{$usuario->user}}?</h1>
        </div>
        <div class="modal-footer">
            <form action="{{route('destroyUsuario',$usuario->id)}}" method="post">
                @csrf 
                @method('delete')
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
                <button type="sumbit" class="btn btn-danger">Eliminar</button>

            </form>
          
        </div>
      </div>
    </div>
  </div>