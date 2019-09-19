<!DOCTYPE html>
<html lang="es" >
<head>
  <meta charset="UTF-8">
  <title>Design register pure CSS</title>
  <link rel="stylesheet" href="css/registro.css">
</head>
<body>

<p class="texto">Registro</p>
<div class="Registro">
<form method="post">

<span class="fontawesome-user"></span><input type="text" name='name' required placeholder="Nombre de usuario" autocomplete="off"> 
<span class="fontawesome-envelope-alt"></span><input type="text" name='username' id="email" required placeholder="usuario" autocomplete="off">
<span class="fontawesome-lock"></span><input type="password" name="password" id="password" required placeholder="Contraseña" autocomplete="off"> 
			<input type="submit" name='guardar' value="Registrar" title="Registra tu cuenta">

      <?php

      if(isset($error)){
        echo "<div style='color:white'>{$error['mensaje']}</div>";
      }

      ?>
  
</body>
</html>