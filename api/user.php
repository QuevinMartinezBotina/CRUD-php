<?php
include 'conexion.php';

class user extends conexion
{
    public $id = null;
    public $name;
    public $last_name;
    public $email;
    public $phone;

    public function getUsers()
    {
        $conexion = conexion::conectar();
        $sql = "SELECT * FROM users order by name asc;";
        $stmt = $conexion->prepare($sql);
        $stmt->execute();
        $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt = null;
        return $array;
    }
}
