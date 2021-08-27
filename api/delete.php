<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $id = base64_decode($_GET['id']);
    require_once 'userModel.php';
    $dao = new user();
    $dao->userDelete($id);
}
