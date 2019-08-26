<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instagra-no</title>
    <link rel="stylesheet" href="bootstrap.css">

</head>

<body>


    <h1>Instagram</h1>

    <h2>Registro</h2>

    <div class="container">
        <div class="row">
            <div class="col-md-5">

                <form method="post">
                    <div class="form-group">
                        <label for="text">Nombre:</label>
                        <input type="text" class="form-control" name="nombre">
                    </div>

                    <div class="form-group">
                        <label for="age">Edad:</label>
                        <input type="number" class="form-control" name="edad">
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email">
                    </div>

                    <div class="form-group">
                        <label for="psw">Contraseña:</label>
                        <input type="password" class="form-control" name="contraseña">
                    </div>

                    <div class="form-group">
                        <button type="submit" name="registrar" class="btn btn-primary">Enviar</button>
                    </div>
                </form>

                <?php 
                //echo"<pre>";
                //print_r($_POST);
               //echo"</pre>";

               if ( isset($_POST['registrar']) ) {
                   //echo "Presionaste el boton";

                    // Alamacenar en los datos en variables
                    $nombre = $_POST['nombre'];
                    $correo = $_POST['email'];
                    $edad = $_POST['edad'];

                    // Se puede hacer esto con el echo
                   echo "<div class='alert alert-success'>
                   Gracias por registrate $nombre
                   <p>Se ha enviado un c&oacute;digo de confirmaci&oacute;
                    al correo <b>$correo</b> 
                   </p>
                   </div>";
               }

               

                ?>

            </div>
        </div>
    </div>

</body>
</html>