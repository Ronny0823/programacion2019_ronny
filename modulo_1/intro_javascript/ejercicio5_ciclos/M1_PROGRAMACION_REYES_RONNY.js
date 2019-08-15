// Autor
alert("Ronny Reyes");
//El usuario debe digitar su nombre, edad, y dos números.
var nombre = prompt("Dijite su nombre");
var edad = parseInt( prompt("Dijite su edad"));
var numero1 = parseInt ( prompt("Dijite su primer numero"));
var numero2 = parseInt(prompt("Dijite su segundo  numero"));

document.write(nombre);
document.write(edad);



//operaciones básicas

var opcion = prompt(`Elija su opcion:
1. suma 
2.resta
3.divicino
4.multiplicacion
`);

while (opcion > 4 || opcion < 1) {
    opcion = prompt(`Elija su opcion corecta mente:
   1. suma
    2. resta
    3. divicion
    4. multiplicacion   
`);
}

if (opcion == 1) {
    document.write(`La suma de ${numero1} y ${numero2} es ${numero1 + numero2} `);
}

if (opcion == 2) {
    document.write(`La resta de ${numero1} y ${numero2} es ${numero1 - numero2} `);
}

if (opcion == 3) {
    document.write(`La divicion de ${numero1} y ${numero2} es ${numero1 / numero2} `);
}

if (opcion == 4) {
    document.write(`La multiplicacion de ${numero1} y ${numero2} es ${numero1 * numero2} `);
}
