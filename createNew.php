<?php

require_once 'Noticias.php';
require_once 'Escritores.php';


if (isset($_POST)){
    $new = new Noticias($_POST['titulo'], $_POST['subtitulo'], $_POST['fecha'], $_POST['desarrollo'], $_POST['tema'], $_POST['id_escritor']);

    $cantPub = Noticias::getCountByWriter($_POST['id_escritor'])[0];

    Escritores::updateWriterData($_POST['id_escritor'], $_POST['fecha'], $cantPub);
   
}
include 'index.php';
