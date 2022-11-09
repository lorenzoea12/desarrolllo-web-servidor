<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $contrasena = 'admin';
    $base_de_datos = 'tienda_ropa';


    //MySQLi
    //PDO

    $conexion = new MySQLi($servidor, $usuario, $contrasena, $base_de_datos) or die("Error en la conexión");

?>