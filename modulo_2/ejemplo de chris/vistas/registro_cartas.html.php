<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Regisro</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-md-5">
        <!--formulario de registro -->
        <form method="post">
        <h2>Registro de cartas</h2>
        <a href="lista_cartas.php">Ver lista de cartas </a>
        <hr>
        
        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="nombre" value="<?php if(isset($_POST['name'])) echo $_POST['name']?>">
            <?php
            if (isset($error) && $error['codigo'] == 1) {
                echo $error['mensaje'];
            }

            ?>
                    </div>

                    <div class="form-group">
            <input type="url" name="link" class="form-control" placeholder="link" value="<?php if(isset($_POST['link'])) echo $_POST['link']?>">
            <?php
            if (isset($error) && $error['codigo'] == 2) {
                echo $error['mensaje'];
            }

            ?>
                    </div>

                    <div class="form-group">
            <input type="number" name="price" class="form-control" placeholder="precio" value="<?php if(isset($_POST['price'])) echo $_POST['price']?>">
            <?php
            if (isset($error) && $error['codigo'] == 3) {
                echo $error['mensaje'];
            }

            ?>
                    </div>
                    
                    <div class="form-group">
                    <button type="submit" name="guardar" class="btn btn-primary">Guardar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>
</html>