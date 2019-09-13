<?php

try {
    $DB_HOST = "localhost";
    $DB_NAME = "cart";
    $DB_USER = "root";
    $DB_PASS = "";
    $config = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    //     Ejemplo
    $config =[
        3 =>2,// Lanzar excepciones com errores
        19 =>5, // traer los datos en formato de objetos

    ];

    $conexion = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASS, $config);
    
} catch(PDOException $pdo) {
    die( $pdo->getMessage() );
}