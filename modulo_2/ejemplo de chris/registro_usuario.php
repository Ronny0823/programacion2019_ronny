<?php

session_start();

require_once 'conexion.php';

try {
    // Guardar los datos
    if (isset($_POST['guardar'])) {
        $nombre = $_POST['nombre'];
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena']; 

        // Validaciones
        if (empty($nombre)) {
            throw new Exception("El nombre no puede estar vacio", 1);
        }

        if (empty($usuario)) {
            throw new Exception("El usuario no puede estar vacio", 2);
        }

        if (empty($contrasena)) {
            throw new Exception("La contraseña  no puede estar vacio", 3);
        }

       

        // Verificar que no exista en la base de datos
        $sql = "SELECT id, nombre, usuario, contrasena FROM registro WHERE nombre LIKE '%$nombre%'";

       

        $datos = $conexion->query($sql)->fetchAll();

        if (count($datos) > 0) {
            throw new Exception("ya existe este nombre. Elija otro" , 1);
        }

       

        // Insertar     
        $sql = "INSERT INTO registro
                (nombre, usuario, contrasena)
                VALUES
                (\"$nombre\", \"$usuario\", \"$contrasena\")";

        $resultado = $conexion->exec($sql);

        if ($resultado) {

            header("Location: login.php");
            $mensaje = "Se guardaron los datos";
        } else {
            $mensaje = "No se pudieron guardar los datos";
        }

        echo $mensaje;

    }    

} 
catch(PDOException $x){
    die($x->getMessage());
}



catch(Exception $e) {
    
    $error = [
        'codigo' => $e->getCode(),
        'mensaje' => $e->getMessage()
    ];


}

require_once 'vistas/registro_usuario.html.php';
