<?php

session_start();

require_once 'conexion.php';

try {
    
    // Guardar los datos
    if (isset($_POST['guardar'])) {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password']; 

        // Validaciones
        if (empty($name)) {
            throw new Exception("El nombre no puede estar vacio", 1);
        }

        if (empty($username)) {
            throw new Exception("El usuario no puede estar vacio", 2);
        }

        if (empty($password)) {
            throw new Exception("La contraseña  no puede estar vacio", 3);
        }

        // Verificar que no exista en la base de datos
        $sql = "SELECT id, name, username, password FROM users WHERE name LIKE '%$name%'";

        $datos = $conexion->query($sql)->fetchAll();

        if (count($datos) > 0) {
            throw new Exception("ya existe este nombre. Elija otro" , 1);
        }

        // Encriptar la contrasena
        $password = password_hash($password);

        // Insertar     
        $sql = "INSERT INTO users
                (name, username, password)
                VALUES
                (\"$name\", \"$username\", \"$password\")";

        $resultado = $conexion->exec($sql);

        if ($resultado) {

            header("Location: login.php");
            exit;
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
