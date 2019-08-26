<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-6">
                <form method="post">
                    <div class="form-group">
                    <input type="number" name="num1">
                    <br>
                    <input type="number" name="num2">
                    <br>
                    <button type="submit" name="exe" class="btn btn-dark">Sumar</button>
                </div>
                </form>
    <?php
    $num1=$_POST['n1'];
    $num2=$_POST['n2'];
    $num3=$_POST['n3'];
    $num4=$_POST['n4'];

    $prom=($num1 + $num2 + $num3 + $num4)/4;

    echo "Los valores de los numeros son:" .$num1;
    echo "Los valores de los numeros son:" .$num2;
    echo "Los valores de los numeros son:" .$num3;
    echo "Los valores de los numeros son:" .$num4;
    echo "Los valores de los numeros son:" .$prom;




    ?>
</body>
</html>