<!-- Modal -->
<div class="modal fade" id="eliminarComic{{$comics->idComic}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Cómic</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h2>¿Seguro que quieres eliminar {{$comics->nombreComic}}?</h2>
        </div>
        <div class="modal-footer">
            <form action="{{route('destroyComic',$comics->idComic)}}" method="post">
                @csrf
                @method('delete')
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="sumbit" class="btn btn-danger">Eliminar</button>
            </form>
         
        </div>
      </div>
    </div>
  </div>