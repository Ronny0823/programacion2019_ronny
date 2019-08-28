<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 6</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Calcular cu&aacute;ntos años tienes</h1>

                <form method="post">
                    <div class="form-group">
                        <label for="number">Digita tu año de nacimiento:</label>
                        <input type="number" name="nacimiento">
                    </div>

                    <div class="form-group">
                        <button type="submit" name="exe" class="btn btn-dark">Calcular edad</button>
                    </div>
                </form>

                <?php 
                
                if(isset($_POST['exe'])) {
                    
                    $edad = $_POST['nacimiento'];
                    $anoactual = 2019;
                    $calculo = $anoactual - $edad;

                    echo "<div class='alert alert-danger'>Tienes $calculo años.</div>";
                }


                ?>
            </div>
        </div>
    </div>
    
</body>
</html>