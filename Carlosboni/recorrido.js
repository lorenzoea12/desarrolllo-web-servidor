'use strict'

var parrafo = new Array("Hay", 3, " elementos", "importantes", "en", 1, "cocina");

function mostrarNumeros(arreglo) {
    /* for (var i= 0; i < arreglo.length; i++) {
        if(!isNaN(arreglo[i])){
         console.log(arreglo[i]);
        }
         
     }*/

    arreglo.forEach(palabra => {
        if (!isNaN(palabra)) {
            console.log(palabra);
        }

    });
}

mostrarNumeros(parrafo);

var elem=prompt("del parrafo "+parrafo+", qué elemento quiere borrar??");
parrafo.splice(elem, 1);
alert("resultado: ***"+parrafo+"***");