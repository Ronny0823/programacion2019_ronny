function cambiarColor(){
    var color = prompt("Dijite un color en inges");

    var body = document.querySelector(`body`);

    body.style.backgroundColor = color;
}

var deseaCambiar = confirm(`¿Desea cambiar el color`);
if (deseaCambiar) {
    cambiarColor();
}
    
var body = document.querySelector(`body`);
document.addEventListener(`click`, cambiarColor);
document.addEventListener(`keyup`, cambiarColor);





