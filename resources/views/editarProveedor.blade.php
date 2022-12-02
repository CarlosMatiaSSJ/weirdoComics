<!-- Modal -->
<div class="modal fade" id="editarProveedor{{$proveedores->idProveedor}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Proveedor</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <form action="{{route('updateProveedor',$proveedores->idProveedor)}}" method="POST">
          @csrf
          @method('put')
          <div class="container">

            <div class="mb-3">
              <label for="empresa">Empresa:</label>
              <input
                id="empresa"
                type="text"
               
                name="empresa"
                class="form-control"
                value= "{{$proveedores->empresaProveedor}}"
              />
              <p class="text-primary fst-italic">{{ $errors->first('empresa') }}</p>
            </div>


            <div class="mb-3">
              <label for="direccion">Dirección:</label>
              <input
                id="direccion"
                type="text"
         
                name="direccion"
                class="form-control"
                value= "{{$proveedores->direccionProveedor}}"
              />
              <p class="text-primary fst-italic">{{ $errors->first('direccion') }}</p>
            </div>

            <div class="mb-3">
              <label for="pais">País:</label>
              <input
                id="pais"
                type="text"
               pais
                name="pais"
                class="form-control"
                value= "{{$proveedores->paisProveedor}}"
              />
              <p class="text-primary fst-italic">{{ $errors->first('pais') }}</p>
            </div>

            <div class="mb-3">
              <label for="contacto">Contacto:</label>
              <input
                id="contacto"
                type="text"
               
                name="contacto"
                class="form-control"
                value= "{{$proveedores->contactoProveedor}}"
              />
              <p class="text-primary fst-italic">{{ $errors->first('contacto') }}</p>
            </div>


            <div class="mb-3">
              <label for="noFijo">No. Fijo:</label>
              <input
                id="noFijo"
                type="text"
               
                name="noFijo"
                class="form-control"
                value= "{{$proveedores->noFijoProveedor}}"
              />
              <p class="text-primary fst-italic">{{ $errors->first('noFijo') }}</p>
            </div>


            <div class="mb-3">
              <label for="noCelular">No. Celular:</label>
              <input
                id="noCelular"
                type="text"
               
                name="noCelular"
                class="form-control"
                value= "{{$proveedores->noCelularProveedor}}"
              />
              <p class="text-primary fst-italic">{{ $errors->first('noCelular') }}</p>
            </div>

            <div class="mb-3">
              <label for="correo">Correo:</label>
              <input
                id="correo"
                type="text"
               
                name="correo"
                class="form-control"
                value= "{{$proveedores->correoProveedor}}"
              />
              <p class="text-primary fst-italic">{{ $errors->first('correo') }}</p>
            </div>
            
              <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">
                      Actualizar Proveedor
                  </button>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              </div>
          </div>
      </form>





      </div>
      
    </div>
  </div>
</div>