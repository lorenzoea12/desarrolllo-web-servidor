<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Ver Cliente</title>
</head>
<body>
    <div class="container">
        <?php require '../../util/base_de_datos.php' ?>
        <?php require '../header.php' ?>

        <h1>Ver Cliente</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = $_GET["id"];

            $sql = "SELECT * FROM clientes WHERE id = '$id'";

            $resultado = $conexion -> query($sql);

            if ($resultado -> num_rows > 0) {
                while ($fila = $resultado -> fetch_assoc()) {
                    $usuario = $fila["usuario"];
                    $nombre= $fila["nombre"];
                    $primer_apellido = $fila["primer_apellido"];
                    $segundo_apellido = $fila["segundo_apellido"];
                    $fecha_nacimiento= $fila["fecha_nacimiento"];
                }
            }
        }
        ?>

        <div class="row">
            <div class="col-4">
                <p>Usuario: <?php echo $usuario?></p>
                <p>Nombre: <?php echo $nombre ?></p>
                <p>Primer_apellido: <?php echo $primer_apellido ?></p>
                <p>Segundo_apellido: <?php echo $segundo_apellido?></p>
                <p>Fecha_nacimiento: <?php echo $fecha_nacimiento?></p>
                <form action="editar_clientes.php" method="get">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input type="hidden" name="usuario" value="<?php echo $usuario ?>">
                    <input type="hidden" name="nombre" value="<?php echo $nombre ?>">
                    <input type="hidden" name="primer_apellido" value="<?php echo $primer_apellido ?>">
                    <input type="hidden" name="segundo_apellido" value="<?php echo $segundo_apellido?>">
                    <input type="hidden" name="fecha_nacimiento" value="<?php echo $fecha_nacimiento?>">
                    <button type="submit" class="btn btn-primary">Editar</button>
                    <a class="btn btn-secondary" href="index.php">Volver</a>
                </form>
            </div>
            <div class="col-4">
                <img witdh="200" height="300" src="../..<?php echo $imagen ?>">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>