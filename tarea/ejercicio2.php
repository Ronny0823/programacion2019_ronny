<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ejercicio2</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-6">
                <form method="post">
                    <div class="form-group">
                    <input type="number" name="n1">
                    </div>

                     <div class="form-group">
                    <input type="number" name="n2">
                     </div>

                     <div class="form-group">
                     <input type="number" name="n3">
                      </div>

                     <div class="form-group">
                    <input type="number" name="n4">
                     </div>

                     <div class="form-group">
                    <button type="submit" name="exe" class="btn btn-dark">Sumar</button>
                     </div>

                </div>
             </div>
     </div>            
                </form>
    <?php
    if (isset($_POST['exe'])) {
      
    
    $n1=$_POST['n1'];
    $n2=$_POST['n2'];
    $n3=$_POST['n3'];
    $n4=$_POST['n4'];

    $prom=$n1 + $n2 + $n3 + $n4;
    $div=4;

    

    $resultado=$prom/$div;

    echo "promedio: $resultado";
    }



    ?>
</body>
</html>