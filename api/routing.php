<?php

if (isset($_GET['action'])) {

    if ($_GET['action'] == "home") {

        require_once "userControlGet.php";
    } elseif ($_GET['action'] == "actualizar") {

        require_once "updateController.php";
    } elseif ($_GET['action'] == "guardar") {

        require_once "actualizar.php";
    } elseif ($_GET['action'] == "delete") {

        require_once "delete.php";
    } else {

        require_once "page404.php";
    }
} else {

    require_once "userControlGet.php"; //aqui podes poner una bienvenida o un login
}
