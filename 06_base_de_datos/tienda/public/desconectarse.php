<?php
    session_start();
    session_destroy();
    header("location: http://localhost/06_base_de_datos/tienda/public/iniciar_sesion.php");
?>