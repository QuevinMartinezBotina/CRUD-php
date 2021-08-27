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

$("#puto").click(function(){
  Swal.fire({
  title: 'puto',
  width: 600,
  padding: '3em',
  background: '#fff url(https://memecrunch.com/meme/AQVKD/heman-dank-memes)',
  backdrop: `
    rgba(0,0,123,0.4)
    url("https://media0.giphy.com/media/QsZol42CPIjMzke1QW/giphy.gif?cid=790b76116df9482a23eaa8b10e2a6438a1b73b95e4abf446&rid=giphy.gif&ct=g")
    left top
    no-repeat
  `
})
})   

