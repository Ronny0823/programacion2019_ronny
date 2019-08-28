<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 5</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <?php 
                
                for($i = 1; $i <= 100; $i++) {
                    echo "<div class='alert alert-danger'>$i</div>";
                }
                
                ?>
            </div>
        </div>
    </div>
    
</body>
</html>