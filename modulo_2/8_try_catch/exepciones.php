<?php

try {
   $edad =8;

   if ($edad < 18) {
       throw new Exception("no pudes acceder", 1);
       
   }

   echo "Bienvenido";
} 
catch (Exception $ex) {
    // echo "<pre>";
    // print_r($ex);
    // echo "</pre>";

    $error = $ex->getmessage();

    echo "<p>$error</p>";
}