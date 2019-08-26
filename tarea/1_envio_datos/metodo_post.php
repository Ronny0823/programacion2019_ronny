<?php 
var_dump($_POST);
var_dump($_FILES);

?>

<form method="post">
    <input type="text" name="correo">
    <br>
    <br>
    <input type="password" name="clave">
    <br>
    <br>
    <input type="file" name="archivo">
    <br>
    <br>
    <button type="submit">Enviar</button>
</form>