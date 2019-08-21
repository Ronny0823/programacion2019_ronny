saludar();
mensaje();
mensaje();
mensaje();
alert("Hola mundo");

function saludar(){
    alert("Hola mundo");
}

function mensaje(){
    document.write(`<h1>Esto fue escrito desde js</h1>`);
}

function decirHola(nombre) {
    document.write(`Hola, ${nombre}`);
}

decirHola("ronny");
decirHola("reyes");
decirHola("ramos");
