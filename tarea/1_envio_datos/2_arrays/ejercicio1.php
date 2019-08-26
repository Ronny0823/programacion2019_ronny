<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Digitar 1 numero</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>

    <div class="container">
    <h1 class="display-4">Digita un numero</h1>
        <div class="row">
            <div class="md-col-5">
                <form method="post">
                    <div class="form-group"><label for=""></label><input type="number" name="num1" class="form-control"></div>
                    
                    <div class="form-group">
                        <button type="submit" name="calcular" class="btn btn-dark">Pulsa aqu&iacute;</button>
                    </div>
                </form>
            </div>

            <div class="col-md-6">
                <?php 
                
                if(isset($_POST['calcular'])) {
                    $dias = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"];

                    echo "<div class='alert alert-danger'>$dias</div>";
                }
                

                
                
                ?>
            </div>
        </div>
    </div>
    
</body>
</html>