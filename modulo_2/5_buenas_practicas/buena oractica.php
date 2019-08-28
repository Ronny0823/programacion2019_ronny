<?php

 $mensaje ="";

if (isset($_POST['verificar'])) {
    $edad = $_POST['edad'];

    if ($edad >= 18) {
        $mensaje = "<p>Bienvenido</p>";
    } else {
        echo "<p>no puedes ver este sitio</p>"
    }
}
require_once 'edad.php'