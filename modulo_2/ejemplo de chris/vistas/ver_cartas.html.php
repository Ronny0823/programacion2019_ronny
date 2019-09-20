<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ver img</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    
</head>
<body>
    <div class="container">
            <img src="<?= $carta->link; ?>" alt="imagen" width="1290vw" height="400vh" style="margin-left:-90px;">
            <div class="row">
                <div class="col-12 col-md-12"> 
                    <h1 class="display-3 text-center"><?= $carta->name;?></h1>
                    <p class="text-success text-center"><?= $carta->price;?></p>
                    <p class="text-center">Esta es una descricion</p>
                </div>
            </div> 
    </div>
</body>
</html>