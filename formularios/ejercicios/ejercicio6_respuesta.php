<h1>Respuesta Ejercicio 6 </h1>


<?php

$numero=$_POST["numero"];
$factorial=1;

for($i=1;$i<=$numero;$i++){
    $factorial=$factorial*$i;
}

echo "<p>$factorial</p>";


?>