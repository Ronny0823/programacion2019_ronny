<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 8</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
            <h1>Mostrar un mes del año</h1>
                <form method="post">
                    <div class="form-group">
                        <label for="number">Digita un n&uacute;mero:</label>
                        <input type="number" name="numero_mes">
                    </div>

                    <div class="form-group">
                        <button name="exe" class="btn btn-dark">Mostrar el mes</button>
                    </div>
                </form>
                <?php 
                
                    if(isset($_POST['exe'])) {
                    
                        $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

                        $numero_mes = $_POST['numero_mes'];

                        if($numero_mes < 0 || $numero_mes > 11) {
                            echo "<div class='alert alert-danger'>No puedes ingresar un numero menor que 0 ni mayor que 11</div>";
                        }else {
                            echo "<div class='alert alert-primary'>$meses[$numero_mes]</div>";
                        }

                        
                        
                    }
                ?>
            </div>
        </div>
    </div>
    
</body>
</html>