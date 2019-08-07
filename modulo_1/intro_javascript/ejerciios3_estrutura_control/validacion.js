

var validacion = {
    nombre: prompt("Digite su nombre"),
    ano: parseInt( prompt("Digite su año de nacimiento")),
    
}
var edad = 2019 - validacion.ano;

if (validacion.ano > 0) {
    document.write (`<h1>${validacion.nombre}, año es positivo: ${validacion.ano}, edad ${edad}</h1>`);
}

else{
    document.write(`<h1>${validacion.nombre}, año es negativo: ${validacion.ano}</h1>`);
}

