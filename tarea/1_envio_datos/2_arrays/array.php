<?php 
// Las pc empiezan a contar desde 0

$dias = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"];
$frutas = ['Manzana', 'Pera', 'Naranja'];
$meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre',];
$colores = ['Negro', 'Azul', 'Rojo',];

echo $dias[6];
echo $frutas[2];
echo $meses[3];
echo $colores[0];

echo "<hr>";
echo "<br>Los meses del año son: <br>";
for ($valor = 0; $valor <=11; $valor++) {
    echo $meses[$valor] . "<br>";
}
?>