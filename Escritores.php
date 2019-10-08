<?php

require_once 'conexion.php';
class Escritores
{
    protected $ultimaPublicacion = '';

    public function __construct($nombre, $apellido, $edad)
    {
        $con = new conexion();//var_dump($con);die();
        try{
            $sql = "SELECT ultima_publicacion FROM noticias n INNER join escritores e on n.id = e.";
            $this->ultimaPublicacion = $con->exec($sql);
            print "Escritor creado";
        }catch (Exception $e){
            return $e->getMessage();
        }
        
        try{
            $query = "INSERT INTO usuarios (id,nombre,apellido,edad) VALUES (null, $nombre, $apellido, $edad)";
            $resultado = $con->query($query);
        }catch (Exception $e){
            return $e->getMessage();
        }
    }
}
