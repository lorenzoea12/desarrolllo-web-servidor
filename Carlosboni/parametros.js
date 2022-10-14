
'use strict'
var numero1 = 46;
var numero2= "Dia del Padre";
var numero3=true;







function porConsola2 (n1, ...otros) {
    //parametros rest
    console.log(n1);
    console.log(otros);
    console.log(otros.length);

}




function separar(valor1,valor2,valor3,valor4){
    console.log(valor1);
    console.log(valor2);
    console.log(valor3);
    console.log(valor4);


}

porConsola2(numero1,numero2,numero3,"casa",true,"FIN");


var arreglo=new Array("Hola",1,false,"FIN");

console.log(arreglo);
separar(...arreglo);