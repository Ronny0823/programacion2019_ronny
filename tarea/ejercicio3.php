<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ejercicio3</title>
    <link rel="stylesheet" href="bootstrap.min.css">

</head>
<body>
<?php 
for ($i = 2; $i < 100; ++$i) { 
if (($i % 2) == 0) { 
echo "<p>" . $i . "</p>"; 
} 
} 
?>


</body>
</html>