<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <div class="container">
    <h1>Usuarios conectados</h1>
    <ul class="list-group">
        <?php
            $usuariosConetados = [
                "Ronny",
                "Juan",
                "Pedro",
                "Jose",
                "fria",
                "cristian",


            ];

            // Imprimir cada usuario
            foreach($usuariosConetados as $usuario){
                echo "<li class='list-group-item'>{$usuario}</li>";
            }
        ?>
    
    </ul>
    <p>Cantidad de Usuarios conectados: <?php echo count($usuariosConetados);?></p>
    </div>
</body>
</html>