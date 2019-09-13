<?php
require_once 'conexion.php';

if (isset($_POST['borrar'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM cartas WHERE id =$id";

    $elininado = $conexion->exec($sql);

    if ($elininado) {
        echo"Eliminado";

    }
    else {
     echo "no eliminado";
    }
    header("Location: lista_cartas.php");
    exit;

}