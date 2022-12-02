<!-- Modal -->
<div class="modal fade" id="editarComic{{$comics->idComic}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar Cómic</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <form action="{{route('updateComic',$comics->idComic)}}" method="POST">
          @csrf
          @method('put')
          
            <div class="mb-3">
              <label for="nombre">Nombre</label>
              <input
                id="nombre"
                type="text"
               
                name="txtNOMBRE"
                class="form-control"
                value="{{$comics->nombreComic}}"
              />
              <p class="text-primary fst-italic">{{ $errors->first('txtNOMBRE') }}</p>
            </div>
            <div class="mb-3">
              <label for="edicion">Edición:</label>
              <input
                id="edicion"
                type="text"
         
                name="txtEDICION"
                class="form-control"
                value="{{$comics->edicionComic}}"
              />
              <p class="text-primary fst-italic">{{ $errors->first('txtEDICION') }}</p>
            </div>
            <div class="mb-3">
              <label for="compañia">Compañía:</label>
              <input
                id="compañia"
                type="text"
              
                name="txtCOMPAÑIA"
                class="form-control"
                value="{{$comics->compañiaComic}}"
              />
              <p class="text-primary fst-italic">{{ $errors->first('txtCOMPAÑIA') }}</p>
            </div>
            <div class="mb-3">
              <label for="cantidad">Cantidad:</label>
              <input
                id="cantidad"
                type="text"
                
                name="txtCANTIDAD"
                class="form-control"
                value="{{$comics->cantidadComic}}"
              />
              <p class="text-primary fst-italic">{{ $errors->first('txtCANTIDAD') }}</p>
            </div>
            <div class="mb-3">
              <label for="precioCompra">Precio de compra:</label>
              <input
                id="precioCompra"
                type="text"
                
                name="txtPRECIOCOMPRA"
                class="form-control"
                value="{{$comics->precioCompraComic}}"
              />
              <p class="text-primary fst-italic">{{ $errors->first('txtPRECIOCOMPRA') }}</p>
            </div>
            <div class="mb-3">
              <label for="fechaIngreso">Fecha de ingreso:</label>
              <input
                id="fechaImgreso"
                type="date"
                value= "{{$comics->fechaIngresoComic}}"
                name="txtFECHAINGRESO"
                class="form-control"
              />
              <p class="text-primary fst-italic">{{ $errors->first('txtFECHAINGRESO') }}</p>
            </div>
            <div class="mb-3">
              <label for="proveedorA">Proveedor:</label>
              
              <select class="form-select" aria-label="Default select example" name="txtPROVEEDOR">
                <option selected disabled></option>
                @foreach ($consultaProveedores as $proveedor)
                <option value="{{$proveedor->idProveedor}}">{{$proveedor->empresaProveedor}}</option>
                @endforeach
              </select>
              

              <p class="text-primary fst-italic">{{ $errors->first('txtPROVEEDOR') }}</p>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="sumbit" class="btn btn-warning">Actualizar</button>
      </form>
      </div>
    </div>
  </div>
</div>


   

