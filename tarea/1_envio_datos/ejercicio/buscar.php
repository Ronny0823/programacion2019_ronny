<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buscar</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <form method="get">
                    <div class="form-group">
                        <label for="search">Barra de busqueda</label>
                        <input type="search" name="texto">
                    </div>

                    <div class="for-group">
                        <button type="submit" name="buscar" class="btn btn-dark">Buscar</button>
                    </div>
                </form>

                <?php 
                    if( isset($_GET['buscar']) ) {

                        $texto = $_GET['texto'];   

                        echo "<div class='alert alert-success'>Resultados que coinciden con $texto</div>";
                    
                    }
                
                ?>
            </div>
        </div>
    </div>
    
</body>
</html>