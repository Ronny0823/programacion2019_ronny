<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    

    <form  method="post" class="col-md-3" >
    <div class="form-group">
        <input type="text" class="form-control" name="nombre" placeholder="Dijite su nombre">
    </div>

    <div class="form-group">
        <input type="text" class="form-control" name="edad" placeholder="Dijite su edad">
    </div>

    <div class="form-group">
        <input type="imail" class="form-control" name="correo" placeholder="Dijite su correo">
    </div>

    <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Dijite su contaraseña">
    </div>

  <div class="form-group">
        <button type="submit" name="registrar" class="btn btn-primary">Enviar</button>
    </div>

    </form>
    <?php
    
    //echo "<pre>";
    //print_r($_POST);
    //echo "</pre>"
   
    if( isset($_POST['registrar'])){
        echo "precionaste el boton";
    
    // Almacenar los datos en variables
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $edad = $_POST['edad'];

    echo "<div class='alert alert-success' style='margin-right: 900px'>
        Gracias por registrarte.
        <p>Se ha enviado un codigo de confirmacion al correo <b>$correo</b></p>;
    </div>";
}
    ?>
</body>
</html>