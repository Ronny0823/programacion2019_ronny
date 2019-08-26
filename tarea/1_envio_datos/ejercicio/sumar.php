<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form method="post">
                    <div class="form-group">
                    <input type="number" name="num1">
                    <input type="number" name="num2">
                    <button type="submit" name="exe" class="btn btn-dark">Sumar</button>
                </div>
                </form>
                <?php 

                if (isset($_POST['exe'])) {

                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];

                    $suma = $num1 + $num2;

                    echo "<div class='alert alert-success'>La suma de $num1 y $num2 es $suma</div>";
                }
                
                ?>
            </div>
        </div>
    </div>
    
</body>
</html>