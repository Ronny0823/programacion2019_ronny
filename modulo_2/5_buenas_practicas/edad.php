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
        <input type="text" name="edad">
        <button type="submit" name="verificar">verificar</button>
    </form>
    <div>
       <?php echo "Hola" . $mensaje;?> 
    </div>
</body>
</html>