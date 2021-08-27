<?php
require_once 'userModel.php';
$dao = new user();
if (isset($_POST['boton'])) {

    if ($_POST['boton'] == 'guardar') {

        if (
            isset($_POST['name']) & isset($_POST['last_name']) & isset($_POST['email']) & isset($_POST['phone'])
            & isset($_POST['id'])
        ) {

            $usuario_empleado = htmlspecialchars($_POST['usuario_empleado']);
            $contra_empleado = htmlspecialchars($_POST['contra_empleado']);
            $id_empleado = htmlspecialchars($_POST['id_empleado']);
            $nivel_acceso = htmlspecialchars($_POST['nivel_acceso']);
            $estado = htmlspecialchars($_POST['estado']);


            if (empty($usuario_empleado) | empty($contra_empleado) | empty($id_empleado) | empty($nivel_acceso) | empty($estado)) {
                $mensaje = "Campo Vacio";
            } else {

                $mensaje = $dao->insertarUsuario($usuario_empleado, $contra_empleado, $id_empleado, $nivel_acceso, $estado);
            }
        }
    } else if ($_POST['boton'] == 'limpiar') {

        $usuario_empleado = "";
        $contra_empleado = "";
        $id_empleado = "";
        $nivel_acceso = "";
        $estado = "";
        $mensaje = "";
    }
}

require_once 'vistaguardar.php';
