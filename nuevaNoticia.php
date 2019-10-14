<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nueva Noticia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<div class="addNotice">
<form action="createNew.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Título</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Título" name="titulo">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Título" name="id_escritor" value="<?php echo $_GET['id_escritor'] ?>" hidden>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Subtítulo</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Subtítulo" name="subtitulo">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Fecha</label>
    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Fecha"name="fecha">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Desarrollo</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desarrollo"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Tema</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Tema"name="tema">
  </div>
  <button type="submit" class="btn btn-primary" href="noticia.php?id_escitor=<?php echo $_GET['id_escritor']?>">Enviar</button>
</form>
</div>
</html>