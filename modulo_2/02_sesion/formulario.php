<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <h1>crear un formulario</h1>
    <form  method="post" class="col-md-3" >
  <div class="form-group">
    <label for="Nombre1">Nombre</label>
    <div class="form-group">
        <input type="text" class="form-control" name="nombre" placeholder="Dijite su nombre">
    </div>

     <label for="imagen">imagen</label>
    <div class="form-group">
        <input type="text" class="form-control" name="url" placeholder="URL de la imagen">
    </div>
  </div>
  <button type="submit" name="guardar" class="btn btn-primary">guardar</button>
<?php
 if(isset($_POST['guardar'])) {
   $datos = new stdClass();
   $datos ->nombre = $_POST['nombre'];
    $datos ->url = $_POST['url'];



 echo "<pre>";
 print_r($datos);
 echo "</pre>";
  }
?>

</body>
</html>