<?php

require_once 'Noticias.php';
//session_start();

if (isset($_SESSION)){
    Noticias::deleteNew($_SESSION['id']);
}
include 'index.php';
