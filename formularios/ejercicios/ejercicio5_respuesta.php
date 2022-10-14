<h1> Respuesta al formulario 5 </h1>
<?php 
    $b=$_POST["numero"];
    $x =$_POST["Numero2"];
    $resultado = 1;

for ($i = $x; $i > 0; $i--) {
    $resultado *= $b;
}
echo "La potencia es {$b}^{$x} = {$resultado}";


?>