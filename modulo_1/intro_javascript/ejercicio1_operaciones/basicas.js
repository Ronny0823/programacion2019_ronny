// (ENTRADA) El usuario digite dos valores
var valor1 = prompt("Digita el primer valor");
var valor2 = prompt("Digita el segundo valor");

console.log("15" + "15"); //concatena
console.log(parseInt("15") + parseInt ("15"));
 console.log(15 + 15);


//NOTA: El prompt devuelve los valores como texto
// En javaScript cuando sumamos el texto, lo une (contatena)
// cuando vayamos a trabajar con numeros, es decir, convertir texto a numero
// debemos usar la funcion parseINt()


// (PROCESO) Hacer las opreciones con los valores
var suma = parseInt(valor1) + parseInt(valor2);
var resta = parseInt(valor1) - parseInt(valor2);
var multiplicacion = parseInt(valor1) * parseInt(valor2);
var divicion = parseInt(valor1) / parseInt(valor2);

// (SALIDA) Imprimir los valores
console.log(suma);
console.log(resta);
console.log(multiplicacion);
console.log(divicion);


