<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="post">
        <input type="text" name="mes">
        <button type="submit" name="mostrar">mostrar</button>
    </form>
<?php
     if (isset($_POST['mostrar'])) {
      $mes=$_POST['mes']
  

if (mes === 1) {
    echo ("Enero");
} 
else if (mes === 2) {
    echo ("Febrero");
} 
else if (mes === 3) {
    echo ("Marzo");
} 
else if (mes === 4) {
    echo ("Abril");
}
 else if (mes === 5) {
    echo ("Mayo");
} 
else if (mes === 6) {
    echo ("Junio");
} 
else if (mes === 7) {
    echo ("Julio");
}

else if (mes === 8) {
    echo ("Agosto");

} 
else if (mes === 9) {
    echo ("Septiembre");
}

else if (mes === 10) {
    echo ("Octubre");

} 
else if (mes === 11) {
    echo ("Noviembre");

} 
else if (mes === 12) {
    echo ("Diciembre");
}


?>
</body>
</html>




