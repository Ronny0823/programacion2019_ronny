<?php
//comentario en linea 
/*comentario multi linea
*/
# comnentario en linea


//VARIABLES
$nombre = "Ronny";
$edad = 21;
$estaCasado = false;

//Imprimir
echo $nombre; 
echo $edad; 
echo $estaCasado; 
echo"<p>Hola $nombre, tiene $edad años</p>";
echo '<p>Hola $nombre, tiene $edad años</p>';

echo"<p>Hola {$nombre}, tiene {$edad} años</p>";
echo '<p>Hola {$nombre}, tiene {$edad} años</p>';


// concatenacion
echo "<br>" . "hola".$nombre . "<br>";
echo 10 + 10;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Juan</p>
</body>
</html>
