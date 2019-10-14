<?php

require_once 'Conexion.php';
require_once 'Noticias.php';
require_once 'Escritores.php';
//var_dump($_GET);
if(!$_GET){
    echo 'Listado no disponible';
}else{
    $news = Noticias::getNewsByWriter($_GET['id']);
    $apellido = Escritores::getWriterLastName($_GET['id'])['apellido'];
    
}
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Noticias </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
    <h3>Publicaciones de <?php echo $apellido ?></h3>
    <button type="button" class="btn btn-primary" style="float: right;
    margin-bottom: 10px;"><a href="nuevaNoticia.php?id_escritor=<?php echo $_GET['id'] ?>">Crear Noticia</a></button>
</div>    
<div class="tableStyle">
<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">Titulo </th>
            <th scope="col">Fecha </th>
            <th scope="col">Tema </th>
        </tr>
    </thead>
    <tbody>
    
    <?php 
    
    foreach ($news as $rows) {
        echo '<tr class="item_row">';
        echo '<th scope="row"><a href="noticia.php?id=' . $rows['id'] .'">'; 
        echo $rows['titulo'] . '</a></td><td><a href="noticia.php?id=' . $rows['id'] .'">';
        echo $rows['fecha'] . '</a></td><td><a href="noticia.php?id=' . $rows['id'] .'">';
        echo $rows['tema'] . '</a></td></tr>';
    }?>

    </tbody>
</table>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>