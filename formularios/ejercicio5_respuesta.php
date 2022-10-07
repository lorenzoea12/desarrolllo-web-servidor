<h1> Respuesta al formulario 5 </h1>

<?php
$numero = $_POST["numero"];
$exponente = $_POST["exponente"];

for($i=1;$i<$exponente;$i++){
    if($i==1){
        $temporal=$numero;
   
    }
    var_dump($temporal*$numero)
    $temporal=$temporal*$numero;
}
echo "<p>$temporal</p>"

?>