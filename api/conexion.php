<?php

class Conexion
{
    public function conectar()
    {
        include 'conect.php';
        $link = new PDO($host, $usuario, $password, array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        ));
        return $link;
    }
}
