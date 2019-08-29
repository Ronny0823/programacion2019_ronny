<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio9</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="md-col-5">
                <h1>Digita un numero para saber si es par o impar</h1>
                <form method="post">
                    <div class="form-group">
                        <label for="">Digita un n&uacute;mero</label>
                        <input type="number" name="n1">
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" name="calcular" class="btn btn-dark">Enviar</button>
                    </div>
                </form>
                <?php 
                
                if(isset($_POST['calcular'])) {
                    $n1 = $_POST['n1'];

                    if($n1 % 2 == 0){
                        echo "<div class='alert alert-success'>El numero introducido es par</div>";
                    }else {
                        echo "<div class='alert alert-danger'>El numero introducido es impar</div>";
                    }

                }
                

                
                
                ?>
            </div>
        </div>
    </div>
    
</body>
</html>