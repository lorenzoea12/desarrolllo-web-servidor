
<h1>Respuesta  Ejercicio 3 </h1>

<?php

$nombre=$_POST["nombre"];
$edad=(int)$_POST["edad"];


$nombre=ucwords(strtolower($nombre));

if($edad<18 && $edad >=0){
    echo"<p>  $nombre $edad Eres menor de edad </p>";
}else if ($edad>=18 && $edad <= 65  ){
    echo"<p> $nombre $edad Eres adulto</p>";
    
}else if ($edad>65 && $edad < 130 ){
    echo"<p>  $nombre $edad Eres Jubilado</p>";
}


?>