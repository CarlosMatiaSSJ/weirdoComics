<!-- Modal -->
<div class="modal fade" id="editarUsuario{{$usuario->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar Usuario</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('updateUsuario',$usuario->id)}}" method="post">
            <div class="mb-3">
              <label for="nombre">Usuario</label>
              <input
                id="nombre"
                type="text"
               
                name="txtUSUARIO"
                class="form-control"
                value="{{$usuario->user}}"
              />
              <p class="text-primary fst-italic">{{ $errors->first('txtNOMBRE') }}</p>
            </div>
            
            <div class="mb-3">
              <label for="proveedorA">Tipo de usuario:</label>
              
              <select class="form-select" aria-label="Default select example" name="txtTIPOUSUARIO">
                <option selected disabled></option>
                <option value="0">Administrador</option>
                <option value="1">Empleado</option>
                
              </select>
              

              <p class="text-primary fst-italic">{{ $errors->first('txtTIPOUSUARIO') }}</p>
          </div>


        </div>
        <div class="modal-footer">
            
                @csrf 
                @method('put')
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
                <button type="sumbit" class="btn btn-warning">ACTUALIZAR</button>

            </form>
          
        </div>
      </div>
    </div>
  </div>