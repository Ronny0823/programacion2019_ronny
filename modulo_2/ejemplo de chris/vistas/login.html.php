<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

    <form class="box" method="post">
        <h1>Login</h1>
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="login" value="Login">
        <a href="registro_usuario.php">Registrate</a>

        <div>
            <?php 

            if (isset($error)) {
                echo $error["mensaje"];
            }
            
            ?>
        </div>

    </form>
    
</body>
</html>