<?php

session_start();
// cuando queremos borar ponemos este codigo y luego lo quitamos
//$_SESSION=[];

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Listado</title>
  <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>

<div class="container">
  <div class="row">
    <?php
        // Recorrer las publicaciones
            if (isset($_SESSION['publicaciones'])) {
                foreach($_SESSION['publicaciones'] as $publicacion) {
                  echo "<div class='col-md-4'>
                          <img src='{$publicacion->url}' style='width:200px;' class='img-thumbnail'>
                          <p>{$publicacion->nombre}</p>
                        </div>";
                }
            }
            ?>
  </div>
</div>

</body>
</html>