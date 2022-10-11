<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ejercicio7.php" method="post">
    <label>Nombre Videojuego</label><br>
    <input type="text" name="nombre"><br><br>
    <label for="consolas">Elegir consola:</label>
 <select name="consolas" id="consolas">
    <option value="playstation 4">play 4</option>
    <option value="playstation 5">play 5</option>
    <option value="Nintendo Switch">Switch</option>
</select> <br></br>
<label>Edicion Especial</label><br>
<input type="checkbox" id="edicionEspecial" name="edicionEspecial" value="Juego">
<label for="edicionEspecial"> Si es edicion Especial</label><br>
<input type="submit" value="Enviar"> 
</form>




<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $_POST["nombre"];
    $consolas = $_POST["consolas"];
    $edicion = "";
    if(isset($_POST["especial"]))
    $edicion = $_Post["edicion"];
    
}

echo"<p>$nombre</p>";
echo"<p>$consolas</p>";
echo"<p>$edicion</p>";



$precio=0;
if($consolas=="playstation 4"){
    $precio=60;

}else if ($consolas=="playstation 5 "){
    $precio=70;

}else if ($consolas=="Switch"){
    $precio=40;

}


if($especial=="si"){
    $precio*=1.25;
}

echo"<h3> El videojuego $nombre vale $precio</h3>";






?>
    
</body>
</html>