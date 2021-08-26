<?php

class conexion
{
    private $user = "root";
    private $password  = "";

    public function conectar()
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=crudphp', $this->user, $this->password);
            echo "success conection";
        } catch (PDOException $error) {
            echo "fail conection DB" . $error->getMessage();
        }
    }
}
/* $conection = new conexion();
$conection->conectar();
 */