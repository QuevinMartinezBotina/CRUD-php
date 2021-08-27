<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="?action=actualizar" method="post" class="container contenedor-guardar-usuarios animacion-lateral pl-md-5 pt-md-4">

        <div class="form-group">

            <label>Id</label>
            <input type="num" name="id" readonly class="form-control" value="<?php if (isset($id)) {
                                                                                    echo $id;
                                                                                } ?>">
        </div>

        <div class="form-group">
            <label for="name" class="col-form-label">Nombre:</label>
            <input type="text" id="name" name="name" class="form-control" id="recipient-name" value="<?php if (isset($name)) {
                                                                                                            echo $name;
                                                                                                        } ?>">
        </div>
        <div class="form-group">
            <label for="last_name" class="col-form-label">Apellidos:</label>
            <input type="text" id="last_name" name="last_name" class="form-control" id="recipient-name" value="<?php if (isset($last_name)) {
                                                                                                                    echo $last_name;
                                                                                                                } ?>">
        </div>
        <div class="form-group">
            <label for="phone" class="col-form-label">Teléfono:</label>
            <input type="number" id="phone" name="phone" class="form-control" id="recipient-name" value="<?php if (isset($phone)) {
                                                                                                                echo $phone;
                                                                                                            } ?>">
        </div>
        <div class="form-group">
            <label for="email" class="col-form-label">Correo:</label>
            <input type="email" id="email" name="email" class="form-control" id="recipient-name" value="<?php if (isset($email)) {
                                                                                                            echo $email;
                                                                                                        } ?>">
        </div>

        <div class="ro">
            <div class="col-12 d-flex justify-content-center">
                <a type="submit" name="boton" class="btn btn-success   my-2 p-2" href="?action=mostrar">
                    <i class="fas fa-arrow-left"></i> Regresar
                </a>
                <button type="submit" name="boton" value="guardar" class="btn btn-primary my-2 p-2 mx-2">
                    <i class="fas fa-check"></i> Guardar
                </button>
                <button type="submit" name="boton" value="limpiar" class="btn btn-warning my-2 p-2">
                    <i class="fas fa-trash"></i> Limpiar
                </button>
            </div>
        </div>
    </form>
</body>

</html>