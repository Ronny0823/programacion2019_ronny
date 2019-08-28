<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 10</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <?php 

                $text = "";
                
                for($i = 2; $i <= 100; $i++) {
                    if($i%2 == 0)
                    echo "<div class='alert alert-warning'>$i</div>";
                }
                
                ?>
            </div>
        </div>
    </div>
    
</body>
</html>