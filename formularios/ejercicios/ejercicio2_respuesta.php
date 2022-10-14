<h1> Respuesta al formulario</h1>
<ul>

<?php

$n = $_POST["numero"];

for($i=1;$i<=$n;$i++){

    echo"<li>$i</li>";
}

?>
</ul>