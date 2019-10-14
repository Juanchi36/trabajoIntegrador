<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Escritor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="createWriter.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre" name="nombre">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Apellido</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Apellido" name="apellido">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Edad</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Edad"name="edad">
  </div>
  <button type="submit" class="btn btn-primary" href="index.php?    ">Enviar</button>
</form>
</body>
</html>