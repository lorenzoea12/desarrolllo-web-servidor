 'use strict'

var edad = Math.trunc(parseInt(prompt("Introduce tu edad")/10));
if(edad>0) {
    switch(edad) {
        case 0:
        case 1:
        window.alert("su categoria es alevin");
        break;
        case 2:
        window.alert("su categoria es junior");
        break;
        case 3:
        window.alert("su categoria es primera");
        break;
        case 4:
        case 5:
        case 6:
        case 7:
        case 8:
        case 9:
        case 10:
        window.alert("su categoria es senior");
        break;
        default:
        window.alert("datos no validos");
        }
}

window.alert("operacion cancelada")