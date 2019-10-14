<?php

require_once 'Usuarios.php';

//var_dump($_POST);die();
if (isset($_POST)){
    $usr = new Usuarios($_POST['usuario'], $_POST['password']);
    $usr->insert();
}
include 'index.php';