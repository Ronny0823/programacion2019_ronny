/*
var nombreHotel = "Hodelpa Hotel";
var ratingHotel = 4.8;
var havitacionesHotel = 305;
var reservacionesHoteln = 200;
var tieneGymHotel = false;
*/





var hotel = {
    nombre:"Hodelpa Hotel",
    rating: 4.8,
    habitaciones: 305,
    reservaciones: 200,
    tieneGym: false,
}

console.log(hotel.nombre);
console.log(hotel.rating);
console.log(hotel.habitaciones);
console.log(hotel.reservaciones);
console.log(hotel.tieneGym);


// concatenar vs templete string
console.log(`Hola soy un termple string`);
console.log(" Biemvenido al hotel " + hotel.nombre + " que tiene " + hotel.habitaciones + " habitaciones " + " y un rating de " + hotel.rating + " estrellas ");
console.log(`Bienvenido al hotel ${hotel.nombre} que tiene ${hotel.habitaciones} habitaciones y un rating de ${hotel.rating} estrellas`);

console.log(" El hotel tiene " + hotel.reservaciones + " reservaciones ");
console.log(`El hotel tiene ${hotel.reservaciones} reservaciones`);

console.log(" El hotel tiene " + hotel.habitaciones + " habitaciones " );
console.log(`El hotel tiene  ${hotel.habitaciones}  habitaciones`)

console.log(" El hotel tiene " + hotel.reservaciones + " reservaciones de " + hotel.habitaciones + " habitaciones " );
console.log(`El hotel tiene   ${hotel.reservaciones  +  hotel.habitaciones }  reservaciones de  habitaciones`);

console.log(" El hotel tiene " + (hotel.habitaciones - hotel.reservaciones) + " habitaciones disponible " );
console.log(`El hotel tiene ${hotel.habitaciones - hotel.reservaciones} habitaciones disponible `);

console.log( hotel.nombre + " pose un rating de " + hotel.rating + " posee " + hotel.habitaciones + " habitaciones. " + " posee " + hotel.reservaciones + " reservadas ");
console.log(` ${hotel.nombre} pose un rating de  ${hotel.rating} " posee  ${hotel.habitaciones}  habitaciones.  posee ${hotel.reservaciones}  reservadas`);



document.write(`<h1>Bienvenidos a ${hotel.nombre}</h1>
<p>Este hotel es de ${hotel.rating} strellas </p>
<p>Actual mente tenemos ${hotel.habitaciones} habitaciones de las cuales ${hotel.reservaciones} estan reservadas.</p>
`);