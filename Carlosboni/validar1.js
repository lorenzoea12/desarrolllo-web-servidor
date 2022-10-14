'use strict'


var mensaje = "edad incorrecta";
var incorrecta=true;
do{
    var edad= parseINt(prompt("Ingrese sus edad"));
    if ((edad>17)&&(edad<151)){
        mensaje="edad valida";
        incorrecta = false;
        document.write(mensaje);
    }
 
    console.log(mensaje);
    alert(mensaje);
 
}while(incorrecta)
