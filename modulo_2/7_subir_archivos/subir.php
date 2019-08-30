<?php 

$error = "";
$mensaje = "";

if(isset($_POST['subir'])) {
    // echo "<pre>";
    // print_r($_FILES);
    // echo "</pre>";

    if (isset($_FILES['archivo']) && ($_FILES['archivo']['error']) == 0) {
        $nombre = $_FILES['archivo']['name'];
        $nombre_tmp = $_FILES['archivo']['tmp_name'];
        $tamano = $_FILES['archivo']['size'];

        echo "Tamano: " .$tamano;

        $tamano_maximo = 2097152; // 2MB

            if ($tamano > $tamano_maximo) {
                $error = "El archivo no puede ser mayor a 2MB";
            }

        if(is_uploaded_file($nombre_tmp)) {
            $mensjae = "<div class='alert alert-success'>Hemos recibido el archivo</div>";

           
            
              $directorio = "archivos_recibidos";

            if (file_exists($directorio)) {
                    echo "<div class='alert alert-success'>El directorio existe</div>";

                    // Mover el archivo a nuestra carpeta
                    $movido = move_uploaded_file($nombre_tmp, "archivos_recibidos/" .$nombre);

                

                    if($movido) {
                        $mensaje = "<div class='alert alert-success'>El archivo se subio correctamente</div>";
                    }else {
                        $error = "<div class='alert alert-success'>No se pudo mover correctamente</div>";
                    }

            } 
            else {
            echo "<div class='alert alert-danger'>El directorio no existe</div>";
            }

             

        }else {
            $error = "<div class='alert alert-danger'>No se a enviado un archivo</div>";
        }
        
    }else {
        $error = "<div class='alert alert-warning'>No se pudo recibir el archivo</div>";
    }
}

// Incluir la vista
require_once 'archivo.html.php';