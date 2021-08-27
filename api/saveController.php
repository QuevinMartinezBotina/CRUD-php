<?php
require_once 'userModel.php';
$dao = new user();
if (isset($_POST['boton'])) {

    if ($_POST['boton'] == 'guardar') {

        if (
            isset($_POST['name']) & isset($_POST['last_name']) & isset($_POST['email']) & isset($_POST['phone'])

        ) {

            $name = htmlspecialchars($_POST['name']);
            $last_name = htmlspecialchars($_POST['last_name']);
            $email = htmlspecialchars($_POST['email']);
            $phone = htmlspecialchars($_POST['phone']);

            if (empty($name) | empty($last_name) | empty($email) |  empty($phone)) {
                $mensaje = "Campo Vacio";
            } else {
                $mensaje = $dao->userSave($name, $last_name, $email, $phone);
            }
        }
    } else if ($_POST['boton'] == 'limpiar') {

        $name = "";
        $last_name = "";
        $email = "";
        $phone = "";
        $mensaje = "";
    }
}

require_once 'userView.php';
