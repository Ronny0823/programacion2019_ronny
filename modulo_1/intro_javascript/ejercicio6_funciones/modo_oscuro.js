//obtener documentosa
var h3 = document.querySelector(`h3`);
var p = document.querySelector(`p`);
var a = document.querySelector(`a`);
var hr = document.querySelector(`hr`);
var button = document.querySelector(`button`);
var body = document.querySelector(`body`);
var claro = document.querySelector(`.claro`);

var modo = document.querySelector(`.modo`);
var modoOscuroActivado = false;

function intercambiarModo(){
    if (modoOscuroActivado) {
        modoClaro();
    } 
    else{
        modoOscuro();
    }
}





function modoOscuro(){
    h3.style.color = `white`;
    p.style.color = `white`;
    a.style.color = `white`;
    hr.style.bordercolor = `white`;
    button.style.backgraundColor = `white`;

    body.style.backgroundColor = `#353535`;

    modoOscuroActivado = true;
    modo.textContent = `cambiar a modo claro`
}

//modoOscuro();

button.addEventListener(`click`, modoOscuro);

function modoClaro() {
    h3.style.color = `black`;
    p.style.color = `black`;
    a.style.color = `red`;
    hr.style.borderColor = `blue`;
    button.style.backgroundColor = `black`;
    button.style.color = `white`;

    body.style.backgroundColor = `white`;


      modoOscuroActivado = false;
      modo.textContent = `cambiar a modo ocuro`
}

button.addEventListener(`click`, modoOscuro);
claro.addEventListener(`click`, modoClaro);
modo.addEventListener(`click`, intercambiarModo);