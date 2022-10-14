//var  colores=["red","blue","yellow"];//


//forma objetos
var colores1=new Array("red","blue","yellow");


console.log( 'El elemento yellow esta en la posicion'+colores1.indexOf("yellow")+'del array');













var nuevocolor=prompt("añada un color al array");
colores1.push(nuevocolor);
console.log( 'El  nuevo elemento con push esta en la posicion'+colores1.indexOf(nuevocolor)+'del array');


var nuevocolor2=prompt("añada un color al array");
colores1.push(nuevocolor2);
console.log( 'El  nuevo elemento con push esta en la posicion'+colores1.indexOf(nuevocolor2)+'del array');
