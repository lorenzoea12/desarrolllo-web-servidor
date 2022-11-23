<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $temp_nombre = depurar ($_POST["nombre"]);
    
    if (empty($temp_nombre)) {
        $err_nombre = "El Nombre es obligatorio";
    } else {
        if (strlen($temp_nombre) > 80) {
            $err_nombre = "El Nombre no puede tener más de 80 caracteres";
        } else {
            $nombre = $_POST["nombre"];
        }
    }

    (int)$temp_precio = $_POST["precio"];
    if (empty( (int)$temp_precio)) {
        $err_precio = "El precio es obligatorio";
    } else {
        if ((int)$temp_precio < 0) {
            $err_precio = "El precio no puede ser inderior a 0€";
        } else {
            $precio = $_POST["precio"];
        }
    }


    if (isset($_POST["talla"])) {
        $talla = depurar ($_POST["talla"]);
    } else {
        $err_talla = "Selecciona una talla";
    }


    if (isset($_POST["categoria"])) {
        $categoria = depurar ($_POST["categoria"]);
    } else {
        $err_categoria = "Selecciona una categoria";
    }




}
function depurar($dato)
{
    $dato = trim($dato);
    $dato = stripslashes($dato);
    $dato = htmlspecialchars($dato);
    return $dato;
}



?>