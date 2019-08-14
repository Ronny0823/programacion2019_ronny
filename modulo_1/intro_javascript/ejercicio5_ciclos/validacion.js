// Hacer una suma de numeros positivos.
//validar que el usuario no pueda ingresar numeros negativo
/*var num1 = parseInt( prompt("Escribe tu primer digito:"));
while (num1 < 0) {
    num1 = parseInt( prompt("solo numeros positivo:"));
}

var num2 =parseInt(prompt("Escribe tu segundo digito:"));
while (num2 < 0) {
    num2 = parseInt(prompt("solo numeros positivo:"));
}
var resultado = num1 + num2;
alert(`La suma de ${num1} + ${num2} = ${resultado}`);
*/



//3. Hacer un programa que se dijite un pin de 4 dijitos
// Validar que el pin digitado tenga 4 dijitos
/*
var pin = prompt("Digite su pin");

alert(pin.length);

while (pin.length !== 4){
    pin = prompt("El pin digitado tiene mas de 4 dijitos o menos. Intentelo de nuebo");
}
*/
//4.Hacer un programa que el usuario  no pueda ingrsar numero entre 70 y 99
/*var numero = parseInt( prompt("Digite un numero"));

while (numero > 70 || nemero <90){
     numero = parseInt(prompt("Digite un numero(no puede estar entre 70 y 99"));
}
*/
// 5.monto de un balor
/*var monto = parseInt( prompt("Digite el monto"));

while (monto < 600){
    monto = parseInt( prompt("Digite un monto valido"));
}

alert("Bienvenido a su cuenta nueva");
*/
// 6.Hacer un programa que se digiteuna validacion para entrar a INFOTEP edad validar: 16 años
var edad =  parseInt( prompt("Dijite su edad"));

while (edad < 16) {
    edad = parseInt(prompt("Escriba su edad corecta para entrar a infotep"));
}

alert("Bienvenido a infotep")