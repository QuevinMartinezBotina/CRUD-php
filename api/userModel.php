<?php
include 'conexion.php';

class user extends Conexion
{
    public $id = null;
    public $name;
    public $last_name;
    public $email;
    public $phone;

    public function getUsers()
    {
        $conexion = Conexion::conectar();
        $sql = "SELECT * FROM users order by name asc;";
        $stmt = $conexion->prepare($sql);
        $stmt->execute();
        $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt = null;
        return $array;
    }

    public function userUpdate($id, $name, $last_name, $email, $phone)
    {
        $mensaje = "";
        try {

            $conexion = Conexion::conectar();
            $sql = "UPDATE `users` SET `name`=:name,`last_name`=:last_name,
          `email`=:email,`phone`=:phone where `id`=:id";
            $stmt = $conexion->prepare($sql);

            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":last_name", $last_name);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":phone", $phone);
            $stmt->execute();
            $mensaje = "Actualizo Usuario con Exito!!";
        } // fin de try

        catch (PDOException $e) {

            $mensaje = "Problemas al Actualizar Consulte con el Administrador del Sistema!!";
        } // fin del catch

        return $mensaje;
    } // fin del metodo   

    public function userDelete($id)
    {
        $mensaje = "";
        try {

            $conexion = Conexion::conectar();
            $sql = "delete from users where id=:id";
            $stmt = $conexion->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            $mensaje = "Eliminó, Usuario con Exito";
        } // fin del try

        catch (PDOException $e) {
            $mensaje = "Problemas al Eliminar consulte con el administrador";
        } // fin del catch

        return $mensaje;
    } // fin del metodo eliminarUsuario


}
