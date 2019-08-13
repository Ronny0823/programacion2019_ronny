/*4. Calcular la hipotenusa de un triangulo

var base = parseInt(prompt("Digite la base"));
var altura = parseInt(prompt("Digite la altira"));
var multiplicacion = base ** 2 + altura ** 2;

console.log(Math.sqrt(multiplicacion));
*/
/*1. Digitar la base y la altura de un triángulo y calcular e imprimir la hipotenusa.
var base =  parseInt( prompt ("Digite la base"));
var altura = parseInt( prompt ("Digite la altira"));
var multiplicacion = base ** 2 + altura ** 2  ;

console.log(Math.sqrt(multiplicacion));
*/

//9 numero par
/*
var  numero =  prompt ("Digite un numero");
if (numero %2==0) {
    console.log(`${numero} Es un numero par`);
}

else{
    console.log(`${numero} no es un numero par`);
}
*/

//2 promedio
/*
var promedio1 = parseInt( prompt("Ingrese el primer valor"));
var promedio2 = parseInt( prompt("Ingrese el segundo valor"));
var promedio3 = parseInt( prompt("Ingrese el tercer valor"));
var promedio4 = parseInt( prompt("Ingrese el cuarto valor"));

var suma = (promedio1 + promedio2 + promedio3 + promedio4)/4 ;
console.log(suma)
*/

//5. Imprimir los números del 1 al 100
/*
var base = 0;
while(base <=100){
    document.write(base+ "<br/>");
    base++;
}
*/

//6. Digitar el año de nacimiento e imprimir la edad actual
/*
var validacion = {
    ano: parseInt( prompt("Digite su año de nacimiento")),
    
}
var edad = 2019 - validacion.ano;

if (validacion.ano > 0) {
    document.write (`<h1>Tu año es positivo: tienes ${edad} años </h1>`);
}

else{
    document.write(`<h1> Tu año es negativo </h1>`);
}
*/

//7. Digitar un número y mostrar que día de la semana es. 
/*
var dia = parseInt( prompt("Dijite un numero para mostrar un dia de la semana"));

if (dia === 1) {
    console.log("Lunes");
} else if (dia === 2) {
    console.log("Martes");
} else if (dia === 3) {
    console.log("Miercoles");
} else if (dia === 4) {
    console.log("Jueves");
} else if (dia === 5) {
    console.log("Viesnes");
} else if (dia === 6) {
    console.log("Sabado");
} else if (dia === 7) {
    console.log("Domingo");
}
*/


/*
10. //Imprimir los números pares del 1 al 100.
for(var i =0; i<=100; i++){
    if(i%2==0){
        document.write(i+"<br>")
    }
} 
*/

//8. Digitar un número y mostrar qué mes del año es.Validar que no se pueda digitar un número que no sea mayor que 12 o menor que 1.
/*var mes = parseInt(prompt("Dijite un numero para mostrar un mes del año"));

if (mes === 1) {
    console.log("Enero");
} else if (mes === 2) {
    console.log("Febrero");
} else if (mes === 3) {
    console.log("Marzo");
} else if (mes === 4) {
    console.log("Abril");
} else if (mes === 5) {
    console.log("	Mayo");
} else if (mes === 6) {
    console.log("Junio");
} else if (mes === 7) {
    console.log("Julio");
}
} else if (mes === 8) {
    console.log("Agosto");
}
} else if (mes === 9) {
    console.log("Septiembre");
}
} else if (mes === 10) {
    console.log("Octubre");
}
} else if (mes === 11) {
    console.log("Noviembre");
}
} else if (mes === 12) {
    console.log("Diciembre");
}*/
//3. Calcular la distancia recorrida(Buscar formula de la distancia)
var distancia = parseInt( prompt("Dijite un numero"))