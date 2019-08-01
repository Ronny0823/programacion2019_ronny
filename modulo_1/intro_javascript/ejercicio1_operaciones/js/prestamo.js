alert("Bienvenidos a tu banco ");

// Entada
var nombre = prompt("Digta tu nombre");
var monto = parseInt( prompt("Digta el monto del prestamos") );
var cuotas = parseInt( prompt("Digta encuantas cuotas lo vas a pagar") );
var tasa = parseInt( prompt("Digta la tasa del prestamo") );

// PROCESO
var pago = monto / cuotas;
var interes = (monto * tasa)/100;
var total = monto + interes;
// SALIDA
alert("El pago mensual es de: " + pago);
alert("El interes es de: " + total);
alert("El total a pagar sera de: + total")
