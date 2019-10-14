<?php

require_once 'Conexion.php';
require_once 'Noticias.php';

if(!isset($_GET))
    echo 'Listado no disponible';
$new = Noticias::getNewById($_GET['id']);
//var_dump($new[0]);die();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Noticias de </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="tableStyle">
<div class="card">
  <h5 class="card-header"><?php echo $new[0]['titulo'] . '<br><p style="font-size:11px;">' . $new[0]['tema'] . '</p>'?></h5>
  <div class="card-body">
    <h5 class="card-title"><?php echo $new[0]['subtitulo'] . '<br><p style="font-size:12px;">' . $new[0]['fecha'] . '</p>' ?></h5>
    <p class="card-text"><?php echo $new[0]['desarrollo']?></p>
    <a href="checkUser.php?id_escritor=<?php echo $new[0]['id_escritor']?>&id= <?php echo $new[0]['id']?>&titulo=<?php echo $new[0]['titulo']?>&subtitulo=<?php echo $new[0]['subtitulo']?>&fecha=<?php echo $new[0]['fecha']?>&desarrollo=<?php echo $new[0]['desarrollo']?>&tema=<?php echo $new[0]['tema']?>&tipo=editar" class="btn btn-primary" style="color: white;">Editar noticia</a>
    <a href="checkUser.php?id=<?php echo $new[0]['id']?>&tipo=borrar" class="btn btn-primary">Borrar Noticia</a>
  </div>
</div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>