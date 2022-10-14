<h1> Formulario  8</h1>

<form action="ejercicio8.php" method="post">
    <label>Diga un Numero</label><br>
    <input type="text" name="numero"><br><br>
    <input type="hidden" name="f" value="ej8"><br/>
    <input type="submit" value="Enviar"> 
</form>



<ul>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if($_POST["f"] == "ej8"){
        $n = $_POST["numero"];
        echo "<table>";
        echo "<tr><th> Tabla del $n</th></tr>";
        for($i=1;$i<=10;$i++){
            echo "<tr>";
            echo "<td>$n x $i</td>";
            echo "<td>" . $n*$i . "</td>";
            echo "</tr>";

        
        }
        echo "</table>";
    
    }
   
}

?>
</ul>