<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Calcular promedio</h1>
                <form method="post">
                    <div class="form-group">
                        <label for="number">Nota 1</label>
                        <input type="number" name="nota1">
                    </div>

                    <div class="form-group">
                        <label for="number">Nota 2</label>
                        <input type="number" name="nota2">
                    </div>

                    <div class="form-group">
                        <label for="number">Nota 3</label>
                        <input type="number" name="nota3">
                    </div>

                    <div class="form-group">
                        <label for="number">Nota 4</label>
                        <input type="number" name="nota4">
                    </div>

                    <div class="form-group">
                        <button type="submit" name="exe" class="btn btn-dark">Calcular</button>
                    </div>

                    
                </form>
                <?php 

                if (isset($_POST['exe'])) {

                    $nota1 = $_POST['nota1'];
                    $nota2 = $_POST['nota2'];
                    $nota3 = $_POST['nota3'];
                    $nota4 = $_POST['nota4'];

                    $div = 4;

                    $promedio = $nota1 + $nota2 + $nota3 + $nota4;

                    $resultado = $promedio / $div;

                    echo "<div class='alert alert-danger'>Promedio: $resultado</div>";
                }
                
                ?>
            </div>
        </div>
    </div>
    
</body>
</html>