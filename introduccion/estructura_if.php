<h1> Estructura If</h1>

<?php

$numero=3;
if($numero>0){
    echo  "<p> El numero es positivo</p>";
}else if ($numero<0){
    echo  "<p> El numero es negativo</p>";
}else if ($numero=0){
    echo  "<p> El numero es cero</p>";

}


if($numero %2 ==0){
    echo  "<p> El numero $numero es par </p>";
}else{
 echo  "<p> El numero $numero es impar </p>";
}



$alumno= "Lorenzo";
$nota=9;

if($nota < 5){
    echo "<p> El alumno: $alumno ha suspendido</p>";
}else if ($nota == 5 ){
    echo "<p> El alumno: $alumno ha aprobado </p>";
}else if ($nota == 6 ){
    echo "<p> El alumno: $alumno ha aprobado </p>";
}else if ($nota == 7 ){
    echo "<p> El alumno: $alumno tiene notable </p>";
}else if ($nota == 8 ){
    echo "<p> El alumno: $alumno tiene notable </p>";
}else if ($nota == 9 ){
    echo "<p> El alumno: $alumno tiene sobresaliente </p>";
}else if ($nota == 10 ){
    echo "<p> El alumno: $alumno tiene sobresaliente </p>";
}



$usuario="hola";
$contrasena="123";

if ($usuario=="admin"){
    echo "<p> El usuario: es correcto</p>";

}else if (!$usuario=="admin"){
    echo "<p> El usuario: es incorrecto</p>";
}





?>