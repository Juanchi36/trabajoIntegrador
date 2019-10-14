<?php

require_once 'Conexion.php';
class Usuarios
{
    private $user;
    private $password; 
    private $con;

    public function __construct($user, $password)
    {
        $this->con = new Conexion();
        $this->user = $user;
        $this->password = $password;
    }

    public function insert()
    {
        try{
            $query = "INSERT INTO usuarios (id,usuario,clave) VALUES (null,'" . $this->user . "','" . $this->password . "')";
            $result = $this->con->exec($query);
            //var_dump($result);
        }catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function getUsers()
    {
        try{
            $query = $this->con->prepare("SELECT * FROM usuarios");
            $query->execute();
            $result = $query->fetchAll();   
        }catch (Exception $e){
            return $e->getMessage();
        }
        return $result;
    }

    public function getUser($name)
    {
        try{
            $query = $this->con->prepare("SELECT * FROM usuarios WHERE usuario='" . $name . "'");
            $query->execute();
            $result = $query->fetchAll();   
        }catch (Exception $e){
            return $e->getMessage();
        }
        return $result;
    }

    public function verifyUser($usr, $pass)
    {
        try{
            $con = new Conexion();
            $query = $con->prepare("SELECT *
            FROM usuarios
            WHERE (usuario = '".$usr."' AND clave = '".$pass."')");
            $query->execute();
            $result = $query->fetch();   
        }catch (Exception $e){
            return $e->getMessage();
        }
        return $result;
    }

}