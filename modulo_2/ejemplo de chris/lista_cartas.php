<?php

// Incluir la conexion

require_once 'conexion.php';
// estrar todas las cartas
$sql= "SELECT c.id, c.name, c.link, c.price, u.name FROM cartas c
INNER JOIN users u ON (u.id =c.created_by)
WHERE c.activo = 1 ORDER BY id DESC";

// Ejecutar el query y traer todo los datos
$datos = $conexion->query($sql)->fetchAll();

//Buscar
if (isset($_GET['buscar'])) {
    $busqueda = $_GET['busqueda'];

    $sql = "SELECT id, name, link, price FROM cartas WHERE name LIKE '%$busqueda%'";

    $datos = $conexion->query($sql)->fetchAll();
}



// Incluir la vista
require_once 'vistas/lista_cartas.html.php';