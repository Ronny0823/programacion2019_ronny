/*
var nombre = prompt("Digite su nombre");
var horas = prompt("Digite su horas trabajadas");
var pago = prompt("Digite a cuanto le pagan las horas");


var multiplicacion  = (horas) * (pago);


console.log(nombre);

if(horas * pago) {
    console.log(`Uste a ganado ${multiplicacion}  de ganancia por las horas trabajadas`);
}
*/
var empleado = {
    nombre: prompt("Digite su nombre"),
    horas: prompt("Digite su horas trabajadas"),
    pago: prompt("Digite a cuanto le pagan las horas"),
}

document.write(`<h1>${empleado.nombre}, horas trabajadas:
${empleado.horas }, total a cobrar ${empleado.horas*empleado.pago}</h1>`);