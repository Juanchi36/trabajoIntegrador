<?php

require_once 'conexion.php';
class Noticias
{
    public function __construct($title, $subTitle, $date, $new, $topic, $writer_id)
    {
        $con = new Conexion();
        $date = date('Y-m-d');
        $count = 0;

       
        try{
            $query = "INSERT INTO noticias (id,titulo,subtitulo,fecha,desarrollo,tema,id_escritor) VALUES (null,'". $title ."','". $subTitle ."','". $date ."','". $new ."','". $topic ."', ". $writer_id .")";
            $result = $con->exec($query);
            echo '<script language="javascript">alert("Se ha creado una nueva noticia");</script>';
        }catch (Exception $e){
            return $e->getMessage();
        }

        // try{
        //     $query = "SELECT cantidad_publicaciones FROM  escritores WHERE  id = ". $writer_id .")";
        //     $count = $con->exec($query); //var_dump($count); die();
        // }catch (Exception $e){
        //     return $e->getMessage();
        // }
        // //var_dump($count); die();
        // if(!$count){
        //     $count = 1;
        // }else{
        //     $count++;
        // }

        // try{
        //     $query = "UPDATE `escritores` SET `ultima_publicacion` = '". $date . "', `cantidad_publicaciones` = '". $count ."' WHERE `escritores`.`id` = ". $writer_id .";";
        //     $result = $con->exec($query);
        // }catch (Exception $e){
        //     return $e->getMessage();
        // }
    }

    public function getNewsByWriter($id)
    {
        try{
            $con = new Conexion();
            $query = $con->prepare("SELECT * FROM noticias WHERE id_escritor = " . $id . " ");
            $query->execute();
            $result = $query->fetchAll();   
        }catch (Exception $e){
            return $e->getMessage();
        }
        return $result; 
    }

    public function getNewById($id)
    {
        try{
            $con = new Conexion();
            $query = $con->prepare("SELECT * FROM noticias WHERE id = " . $id . " ");
            $query->execute();
            $result = $query->fetchAll();   
        }catch (Exception $e){
            return $e->getMessage();
        }
        return $result; 
    }

    public function deleteNew($id)
    {
        try{
            $con = new Conexion();
            $query = "DELETE FROM noticias WHERE noticias.id = ". $id ."";
            $result = $con->exec($query);
            echo '<script language="javascript">alert("Se ha eliminado la noticia");</script>';
        }catch (Exception $e){
            return $e->getMessage();
        }
    }
    public function getCountByWriter($id)
    {
        try{
            $con = new Conexion();
            $query = $con->prepare("SELECT COUNT(*) FROM noticias WHERE id_escritor = ".$id."");
            $query->execute();
            $result = $query->fetch();   
        }catch (Exception $e){
            return $e->getMessage();
        }
        return $result; 
    }
}
