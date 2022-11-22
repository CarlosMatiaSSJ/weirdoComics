function borrar (){
    swal.fire({
    title: '¿Quieres eliminar este cómic?',
    showDenyButton: true,
    showCancelButton: false,
    confirmButtonText: 'Eliminar',
    denyButtonText: `Cancelar`,
  }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
      Swal.fire('Cómic eliminado con éxito!', '', 'success')
    } else if (result.isDenied) {
      Swal.fire('Los cambios no se han realizado', '', 'info')
    }
  })}

  function borrarArticulo (){
    swal.fire({
    title: '¿Quieres eliminar este Artículo?',
    showDenyButton: true,
    showCancelButton: false,
    confirmButtonText: 'Eliminar',
    denyButtonText: `Cancelar`,
  }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
      Swal.fire('Artículo eliminado con éxito!', '', 'success')
    } else if (result.isDenied) {
      Swal.fire('Los cambios no se han realizado', '', 'info')
    }
  })}

  function borrarProveedor (){
    swal.fire({
    title: '¿Quieres eliminar este Proveedor?',
    showDenyButton: true,
    showCancelButton: false,
    confirmButtonText: 'Eliminar',
    denyButtonText: `Cancelar`,
  }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
      Swal.fire('Proveedor eliminado con éxito!', '', 'success')
    } else if (result.isDenied) {
      Swal.fire('Los cambios no se han realizado', '', 'info')
    }
  })}