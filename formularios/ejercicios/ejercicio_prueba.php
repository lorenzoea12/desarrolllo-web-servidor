<form action="ejercicio7.php" method="get">
    <label>Numero</label><br>
    <input type="text" name="numero"><br><br>
    <input type="submit" value="Enviar"> 
</form>


<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo $_POST["numero"];

}


$SERVER[
    "REQUEST_METHOD"="POST",
    "SERVER_ADDR"="127."
]
 
?>
