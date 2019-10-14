<?php
session_start();
require_once 'Usuarios.php';
//var_dump($_SESSION);die();
$result = Usuarios::verifyUser($_POST['usuario'], $_POST['password']);
if($result){
    if($_SESSION['tipo'] == 'borrar'){
        include 'deleteNew.php';
        exit;
    }else if($_SESSION['tipo'] == 'editar'){
        include 'editNew.php';
        exit;
    }
}else{
    echo '<script language="javascript">alert("Usuario desconocido");</script>';
    include 'index.php';
}
