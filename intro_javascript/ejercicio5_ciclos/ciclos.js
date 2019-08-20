for(var i =1; i<=10; i++){
    // console.log(i);
}
for(var veces=1; veces<=15; veces++){
    document.write(`<p>soy un parrafo</p>`);

    if (veces == 5){
        continue;
    }

    document.write(`<p>Soy un parrafo ${veces}</p>`)
}