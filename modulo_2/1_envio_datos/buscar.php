<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>buscar</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
   <form  method="get" class="col-md-4 mb-3" >
       <div class="form-group">
        <input type="text" class="form-control" name="buscar" placeholder="Dijite su busquedad">
    </div>
     <div class="form-group">
        <button type="submit" name='busqueda' class="btn btn-primary">buscar</button> 
    </div>
   </form>
   <?php
   if ( isset($_GET['busqueda'])) {
       $buscar= $_GET['buscar'];

     echo  "<div class='alert alert-success' style='margin-right: 900px'>
                 <p>Resultado que coicinden con <b>$buscar</b></p>
            </div>";
   }
   
  ?>


</body>
</html>