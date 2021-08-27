$(document).ready( function () {
    $('#table_id').DataTable();
} );
 
$("#crearUsuario").on("click", () => {
  titleForm = "Crear nuevo usuario";
  update = false;
  $("#title-form").text(titleForm);
  $("#formNuevoUsuario").modal("show");
});

function asegurar() {
      rc = confirm("¿Seguro que desea Eliminar?");
      return rc;
    }

