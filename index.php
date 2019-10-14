<?php

require_once 'Conexion.php';
require_once 'Escritores.php';
require_once 'Noticias.php';
require_once 'Usuarios.php';

$writers = Escritores::getWriters();
//var_dump($escritores);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Noticias</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
<div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Menu
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="nuevoEscritor.php">Crear escritor</a>
      <a class="dropdown-item" href="nuevaNoticia.php">Crear noticia</a>
      <a class="dropdown-item" href="nuevoUsuario.php">Crear usuario</a>
    </div>
  </div>
  <h2>Escritores</h2>
</div>
<div class="tableStyle">
<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">Apellido </th>
            <th scope="col">Nombre </th>
            <th scope="col">Edad </th>
            <th scope="col">Última Publicación </th>
            <th scope="col">Cantidad de Publicaciones </th>
        </tr>
    </thead>
    <tbody>
    
    <?php 
    
    foreach ($writers as $rows) {
        echo '<tr class="item_row">';
        echo '<th scope="row"><a href="listado.php?id=' . $rows['id'] .'">'; 
        echo $rows['apellido'] . '</a></td><td><a href="listado.php?id=' . $rows['id'] .'">';
        echo $rows['nombre'] . '</a></td><td><a href="listado.php?id=' . $rows['id'] .'">';
        echo $rows['edad'] . '</a></td><td><a href="listado.php?id=' . $rows['id'] .'">';
        echo $rows['ultima_publicacion'] . '</a></td><td><a href="listado.php?id=' . $rows['id'] .'">';
        echo $rows['cantidad_publicaciones'] . '</a></td></tr>';
    }?>

    </tbody>
</table>
</div>


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
