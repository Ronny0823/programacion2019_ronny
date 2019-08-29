<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio7</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
            <h1>Mostrar un dia de la semana</h1>
                <form method="post">
                    <div class="form-group">
                        <label for="number">Digita un numero:</label>
                        <input type="number" name="numero_dia">
                    </div>

                    <div class="form-group">
                        <button name="exe" class="btn btn-dark">Mostrar el dia de la semana</button>
                    </div>
                </form>
                <?php 
                
                    if(isset($_POST['exe'])) {
                    
                        $dias = ["1-Lunes", "2-Martes", "3-Miercoles", "4-Jueves", "5-Viernes", "6-Sabado", "7-Domingo"];

                        $numero_dia = $_POST['numero_dia'];

                        if($numero_dia < 0 || $numero_dia > 7) {
                            echo "<div class='alert alert-danger'>No puedes ingresar un numero menor que 0 ni mayor que 7</div>";
                        }else {
                            echo "<div class='alert alert-primary'>$dias[$numero_dia]</div>";
                        }

                    }
                ?>
            </div>
        </div>
    </div>
    
</body>
</html>