<?php
//$artistas =[
    //"Juna Gabriel",
    //"Marco Antonio",
    //"Ana Gabriel",
    //"Joan Sebastian",
    //"Forgiven",   
//];

 //echo "<ol>";
    //echo "<li>{$artistas[0]}</li>";
    //echo "<li>{$artistas[1]}</li>";
    //echo "<li>{$artistas[2]}</li>";
    //echo "<li>{$artistas[3]}</li>";
    //echo "<li>{$artistas[4]}</li>";
  //echo"</ol>";

// Usanso el ciclo for

//echo "<ol>";
//for ($i=0; $i < 5; $i++) { 
    //echo "<li>{$artistas[$i]}</li>";
//}
//"</ol>";




$estudiantes =[
    "Alcema Wilben",
    "Antoine Wenchelle",
    "Ford Kervens",
    "Frias Nuñes",
    "Gomez Mendo Johanna", 
    "Norbin Waddley Belizaire",     
    "Nuñes Ventura Cristopher Ramon",   
    "Peralta Rodrigues Linda Carolin",   
    "Ramos Reyes Ronny Leonardo",   
    "Suarez Fernandez Luis Alberto",   
    
];
 echo "<h1>Listado de estudiantes en INFOTEP</h1>";

 echo "<ol>";
    echo "<li>{$estudiantes[0]}</li>";
    echo "<li>{$estudiantes[1]}</li>";
    echo "<li>{$estudiantes[2]}</li>";
    echo "<li>{$estudiantes[3]}</li>";
    echo "<li>{$estudiantes[4]}</li>";
    echo "<li>{$estudiantes[5]}</li>";
    echo "<li>{$estudiantes[6]}</li>";
    echo "<li>{$estudiantes[7]}</li>";
    echo "<li>{$estudiantes[8]}</li>";
    echo "<li>{$estudiantes[9]}</li>";

    echo"</ol>";


 echo "<h1>Listado de estudiantes en INFOTEP</h1>";
 
 echo "<ol>";
for ($i=0; $i <10 ; $i++) { 
    echo "<li>{$estudiantes[$i]}</li>";
}
 echo"</ol>";



 echo "<h1>Listado de estudiantes en INFOTEP</h1>";
 
 echo "<ol>";
foreach ($estudiantes as $numero => $nombre) {
    echo "<li>{$nombre}</li>";
}
echo"</ol>";















?>