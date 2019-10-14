<?php

require_once 'Conexion.php';
class Escritores
{
    private $name;
    private $lastName;
    private $age;
    private $con;
    private $lastPublication;
    private $publicationCount;

    public function __construct($name, $lastName, $age)
    {
        $this->con = new Conexion();
        $this->name = $name;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function insert()
    {
        try{
            $query = "INSERT INTO escritores(id,nombre,apellido,edad,ultima_publicacion,cantidad_publicaciones) VALUES (null,'". $this->name ."','". $this->lastName ."', ". $this->age .", null, null)";
            $result = $this->con->exec($query);
            echo '<script language="javascript">alert("Se ha creado un nuevo escritor");</script>';
            //var_dump($result);
        }catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function getWriters()
    {
        try{
            $con = new Conexion();
            $query = $con->prepare("SELECT * FROM escritores");
            $query->execute();
            $result = $query->fetchAll();   
        }catch (Exception $e){
            return $e->getMessage();
        }
        return $result; 
    }

    public function getWriterLastName($id)
    {
        try{
            $con = new Conexion();
            $query = $con->prepare("SELECT apellido FROM escritores WHERE id = ". $id . " ");
            $query->execute(); 
            $result = $query->fetch();   
        }catch (Exception $e){
            return $e->getMessage();
        }
        return $result; 
    }


    public function getLastPublication()
    {
        return $this->lastPublication;
    }

    public function updateWriterData($id, $fecha, $cantidad)
    {
        try{
            $con = new Conexion();
            $query = "UPDATE escritores SET ultima_publicacion = '". $fecha ."', cantidad_publicaciones = '". $cantidad ."' WHERE escritores.id = ". $id .";";
            $result = $con->exec($query);
            
        }catch (Exception $e){
            return $e->getMessage();
        }
    }
}
