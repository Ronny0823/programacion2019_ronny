// Informacion del sitio web
var sitioWeb = {
    titulo: "Bienvenido a LOREcar",
    subtitulo: "Diseño de carros ",
    color: "azul,rojo,etc",
    logo: false,
    creador: "Ronny y juan",
    año: 2019,
    servicios: "diseños para vehiculos",
}

// cambiar el titulo a la pagina 
document.title = sitioWeb.titulo + " - " + sitioWeb.subtitulo;

// mostrar infomacion del sitio en la pagina

var h1 = document.querySelector("#info");

console.log(h1);

h1.innerHTML = "Sitio Web creado por " + sitioWeb.creador + " en el año" + sitioWeb.año;
