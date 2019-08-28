<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Calcular la distancia recorrida</h1>
                <h4>Vas en la zanahoria-m&oacute;vil de Su&aacute;rez</h4>

                <form method="post">
                    
                    <div class="form-group">
                        <label for="number">Distancia en horas:</label>
                        <input type="number" name="horas">
                    </div>

                    <div class="form-group">
                        <label for="number">Velocidad Km/h:</label>
                        <input type="number" name="velocidad">
                    </div>

                    <div class="form-group">
                        <label for="number"></label>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="exe" class="btn btn-dark">Calcular</button>
                    </div>
                </form>

                <?php 
                
                if(isset($_POST['exe'])) {
                    
                    $horas = $_POST['horas'];
                    $velocidad = $_POST['velocidad'];

                    $calculo = $velocidad * $horas;

                    echo "<div class='alert alert-danger'>Vas a recorrer $calculo Kilómetros.</div>";

                }
                
                ?>
            </div>
        </div>
    </div>
    
</body>
</html>