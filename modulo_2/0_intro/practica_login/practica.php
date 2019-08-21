<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/practica.css">
</head>

<body class="container">
  
  <form class="py-5 px-5 bg-dark">
    <div class="text-white">
      <label for="exampleInputEmail1">Agregar un Gmail</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
        placeholder="Ingrese correo electrónico" name="email"/>
      <small id="emailHelp" class="text-warning">Nunca compartiremos su correo electrónico con nadie más.</small>
    </div>
    <div class="text-white">
      <label for="exampleInputPassword1">Contraseña</label>
      <input type="contraseña" class="form-control" id="exampleInputPassword1" placeholder="contraseña" name="password" />
    </div>
    <div class="text-white form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1" name="exampleCheck1"/>
      <label class="form-check-label" for="exampleCheck1">Me echa un vistazo</label>
    </div>
    <button type="submit" class="btn btn-primary ">Enviar</button>
  </form>
  

</body>
<img src="css/ronny1.gif" width="740" height="500">
<?php
  if(isset($_GET)){
    $usuario = new stdClass();
    $usuario->correo = $_GET['email'];
    $usuario->contrasena = $_GET['password'];

    echo "<div class='alert alert-success'>";
    echo "<p>Hola, se te enviara un correo a $usuario->correo</p>";
    echo "<p>Tu contraseña es $usuario->contrasena. No las compartas</p>";
  }
?>
</html>
