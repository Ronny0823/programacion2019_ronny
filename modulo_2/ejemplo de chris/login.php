<?php

session_start();

// Vericar si elusuariono esta logeado
if(!isset($_SESSION['id_user'])){
    header("location: lista_cartas.php");
    exit;
}

require_once 'conexion.php';


try {
    if (isset($_POST['login'])) {
    $usename = $_POST['username'];
    $password = $_POST['password'];

    // Buscar esos datos en la base de datos
    $sql = "SELECT id, name, username, password FROM users
            WHERE username = '$usename' ";

    $resultado = $conexion->query($sql)->fetch();

    if ($resultado) {
        // comparar la contraseña encritada
            if (! password_verify($password, $resultado->password)){
               throw new Exception("La contraseña no coincide");
               
            }
        //Iniciar sesion
        $_SESSION['id_user'] = $resultado->id;
        $_SESSION['name_user'] = $resultado->name;

        header("Location: registro_cartas.php");
        exit;
    }
    else {
        throw new Exception("Usuario o contrasena no coinciden");
    }
}

}
catch(PDOFxception $x){
    die($x->getMessage());

}
catch(Exception $e){

    $error = [
        'codigo' => $e->getCode(),
        'mensaje' => $e->getMessage()
    ];
}

// 
require_once 'vistas/login.html.php';