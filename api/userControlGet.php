<?php
require_once 'userModel.php';
$user = new user();
$users = $user->getUsers();
$tam = sizeof($users);
require_once 'userView.php';
/* $dao = new user();
$usuarios = $dao->getUsers();
$tam = sizeof($usuarios);
require_once 'userView.php'; */
