<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.css">
    <script src="https://kit.fontawesome.com/a4a6364b6a.js" crossorigin="anonymous"></script>


    <link href="assets/css/styles.css" rel="stylesheet" />

    <title>CRUD PHP</title>
</head>

<body class="bg-info container">

    <h1 class="p-2 text-white d-flex justify-content-center">USERS TABLE</h1>



    <?php



    if ($tam == 0) {
        echo "<br><p><strong>No se encontro Registro de Usuario!!</strong></p>";
    } else {

    ?>

        <div class="row mb-2">
            <div class="col-12">
                <button class="btn btn-success" id="crearUsuario">New user</button>
                <a class="btn btn-dark" href="?action=home">Home</a>
                <a class="btn btn-dark" href="?action=home"><i class="fas fa-sync"></i> Refresh</a>
                <button id="puto" class="btn btn-danger" href="?action=home"><i class="fas fa-gift"></i></button>
            </div>
            <div class="col-12">
            </div>
        </div>


        <table id="table_id" class="display shadow">
            <thead class="text-white bg-dark ">
                <tr>
                    <th>
                        Nombre
                    </th>
                    <th>
                        Apellidos
                    </th>
                    <th>
                        Teléfono
                    </th>
                    <th>
                        Correo
                    </th>
                    <th>
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $cont = 1;

                foreach ($users as $usuario) {
                    echo "<tr >" .
                        "<td class=' pt-4'>" . $usuario["name"] . "</td>" .
                        "<td class=' pt-4'>" . $usuario["last_name"] . "</td>" .
                        "<td class=' pt-4'>" . $usuario["email"] . "</td>" .
                        "<td class=' pt-4'>" . $usuario["phone"] . "</td>" .

                        "<td><a href='?action=actualizar&objeto=" . base64_encode(serialize($usuario)) .
                        "' class='btn btn-warning p-1 my-3'><i class='fas fa-edit'></i>  Edit</a> &nbsp;&nbsp;" .
                        "<a id='delete'href='?action=delete&id=" . base64_encode($usuario["id"]) .
                        "' class='btn btn-danger p-1 my-3'  onclick='javascript:return asegurar();'><i class='fas fa-trash'></i> Delete</a></td>" .
                        "</tr>";
                    $cont++;
                }

                ?>

            </tbody>

            <table>
            <?php
        }
            ?>

            <div class="modal fade" id="formNuevoUsuario" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="formNuevoUsuario" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="loader">
                            <div class="lds-facebook">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                        <div class="modal-header">
                            <h5 class="modal-title" id="title-form">Crear nuevo usuario</h5>
                            <button type="button" class="close" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="?action=guardar" method="post">


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

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary close" data-dismiss="modal">Close</button>
                                    <button type="submit" name="boton" value="guardar" class="btn btn-primary my-2 p-2 mx-2">
                                        <i class="fas fa-check"></i> Guardar
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
            </script>
            <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.js">
            </script>
            <script src="./assets/js/tables.js"></script>

            <!-- Sweetalert -->
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

            <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>

<?php
require_once 'api/routing.php';

?>