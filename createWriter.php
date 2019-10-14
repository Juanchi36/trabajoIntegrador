<?php

require_once 'Escritores.php';

//var_dump($_POST);
if (isset($_POST)){
    $wr = new Escritores($_POST['nombre'], $_POST['apellido'], $_POST['edad']);
    $wr->insert();
}
include 'index.php';
