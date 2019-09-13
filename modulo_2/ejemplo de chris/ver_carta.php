<?php
require_once 'conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    //echo 'Informacion de la cartas de ID' . $id;

    $sql = "SELECT id, name, link, price FROM cartas WHERE id = $id";

    $carta = $conexion->query($sql)->fetch();

    // echo "<pre>";
    // print_r($carta);

    if (!$carta) {
        die("Esta carta no existe");
    }

}

//Incluir la vista
require_once 'vistas/ver_cartas.html.php';