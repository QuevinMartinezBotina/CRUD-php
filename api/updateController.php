<?php

// peticion get para traer información del crud

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $usuario = unserialize(base64_decode($_GET['objeto']));


    $id = $usuario['id'];
    $name = $usuario['name'];
    $last_name = $usuario['last_name'];
    $email = $usuario['email'];
    $phone = $usuario['phone'];
} else if ($_SERVER['REQUEST_METHOD'] == 'POST') {



    require_once 'userModel.php';
    $dao = new user();
    if (isset($_POST['boton'])) {



        if ($_POST['boton'] == 'guardar') {

            if (
                isset($_POST['name']) & isset($_POST['last_name']) & isset($_POST['email']) & isset($_POST['phone'])
                & isset($_POST['id'])
            ) {

                $name = htmlspecialchars($_POST['name']);
                $last_name = htmlspecialchars($_POST['last_name']);
                $email = htmlspecialchars($_POST['email']);
                $phone = htmlspecialchars($_POST['phone']);
                $id = htmlspecialchars($_POST['id']);

                if (empty($name) | empty($last_name) | empty($email) |  empty($phone) |  empty($id)) {
                    $mensaje = "Campo Vacio";
                } else {

                    $mensaje = $dao->userUpdate($id, $name, $last_name, $email, $phone);
                }
            }
        } else if ($_POST['boton'] == 'limpiar') {

            $name = "";
            $last_name = "";
            $email = "";
            $phone = "";
        }
    }
} // metodo post

// peticion post para actualizar el registro
require_once 'updateView.php';
