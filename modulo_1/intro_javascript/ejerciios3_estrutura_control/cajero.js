// 0.Seleccionar idioma
var idioma = prompt(`Escriba su idioma`)


// 1.Introducir tarjeta
var tarjeta = prompt(`Introduca su tarjeta`);
// validar que la longitud de digitos sea 12.
//mostrar un mensaje en caso que la longitud sea mayor que 12.
if (tarjeta.length > 12) {
    alert(`Tarjeta no es valida`)
}

// 2.Digitar pin
var pin = prompt("Digite su PIN");

while (pin.length !== 4) {
    pin = prompt("Digite un  PIN válido");
}

// 4.Seleccionar opcion
// 3.Mostrar opciones
var opcion = prompt(`Selecione la opciones correctas:
1.Retiro
2.Avance
3.Chequear balance
4.Depocito`);

while (opcion || 4 ) {
    opcion = prompt(`Selecione la opciones correctas:
   1. Retiro
    2. Avance
    3. Chequear balance
    4. Depocito 
 
    `);
}

// 5.Seleccionar tipo de cuenta
var tipoDeCuenta = (`Seleccionar tipo de cuenta
1.Cuenta de ahoro
2.Tarjeta de credito
3.Cuenta coriente`);

// 6. Mostrar opciones de monto
// 7.Seleccionar monto
var opcionMonto = prompt(`Elija el monto que quiere usar:
1.200$
2.500$
3.1000$
4.1500$
5.2000$
6.2500$
7.3000$
8.Otros
`);



// 8.Mostrar opcion de recibo
// 9.Elegir si o no del comprobate del recibo
var quiereComprobante = confirm(`¿Desea un comprobante?`)
if(true){
    //Imprimir recibo
    alert(`Imprimiendo mensaje`);
}
else{
    // no inprimir recibo
}
// 10.Mostrar mensaje "Retire su dinero"y el dinero sale

alert("Retire su dinero");

// 11.Mostrar el mensaje "Retire su tarjeta"y el usuario saca su tarjeta

alert("Retire su tarjeta, por favor");


