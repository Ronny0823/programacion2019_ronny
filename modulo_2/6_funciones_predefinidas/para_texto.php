<?php
//$cadena = "palabra";
//echo strlen ($cadena);

//$cadena = "uno,dos,tres,cuatro,cinco";
//$array = explode(",", $cadena);
//echo "<br><br>El número de elementos en el array es: " . count($array);

// #2 explode();
// $nombre_completo = "Ronny Leonardo Ramos Reyes";
// $array_nombre = explode(" ",$nombre_completo);

// echo("<pre>");
// print_r($array_nombre);
// echo("</pre>");

// #3 split();
// $pais = "Republica Dominicana";
// $texto = str_split($pais, 1);

// echo("<pre>");
// print_r($texto);
// echo("</pre>");

// #4.strtoupper();
// $ciudad = "Santiago de los caballeros";

// echo strtoupper($ciudad); 

// // #5.strtolower();
// echo "<br>";

// echo strtolower($ciudad); 

// ltrim
$nombre = "     Ronny";

echo "<pre>" . $nombre . "</pre>";
echo "<pre>" . ltrim($nombre) . "</pre>";

// rtrim
$nombre = "Ronny"     ;

echo "<pre>" . $nombre . "</pre>";
echo "<pre>" . rtrim($nombre) . "</pre>";

// trim
$nombre = "     Ronny   ";

echo "<pre>" . $nombre . "</pre>";
echo "<pre>" . trim($nombre) . "</pre>";
?>