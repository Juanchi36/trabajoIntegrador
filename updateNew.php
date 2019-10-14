<?php 

require_once 'conexion.php';
//var_dump($_POST);die();
$con = new Conexion();

try{
    $query = "UPDATE noticias SET titulo = '". $_POST['titulo'] ."', subtitulo = '". $_POST['subtitulo'] ."', fecha = '". $_POST['fecha'] ."', desarrollo = '". $_POST['desarrollo'] ."', tema = '". $_POST['tema'] ."' WHERE noticias.id = ". $_POST['id'] .";";
    $result = $con->exec($query);
    echo '<script language="javascript">alert("Se ha modificado la noticia");</script>';
}catch (Exception $e){
    return $e->getMessage();
}

include 'index.php';