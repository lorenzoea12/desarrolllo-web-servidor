<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="prendas.css" />
    <title>Index</title>
</head>
<body>
    <div class="container">
    <?php require '../../util/control_de_acceso.php'?>
        <?php require '../../util/base_de_datos.php' ?>
        <?php require '../header.php' ?>
        <br>
        <h1>Listado de prendas</h1>

        <div class="row">
            <div class="col-9">
                <br>
                <a class="btn btn-primary" href="insertar_prenda.php">Nueva prenda</a>
                <br><br>
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Imagen</th>
                            <th>Talla</th>
                            <th>Precio</th>
                            <th>Categoría</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php   //  Borrar prenda
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                $id = $_POST["id"];

                                //  Consulta para coger la ruta de la imagen y luego borrarla
                                $sql = "SELECT imagen FROM prenda WHERE id = '$id'";
                                $resultado = $conexion -> query($sql);

                                if ($resultado -> num_rows > 0) {
                                    while ($fila = $resultado -> fetch_assoc()) {
                                        $imagen = $fila["imagen"];
                                        if($imagen!="/images/prendas/camiseta.jpg"){
                                          unlink("../.." . $imagen);
                                      }                               
                                  }
  
  
                                }
  
                                //  Consulta para borrar la prenda
                                $sql = "DELETE FROM prenda WHERE id = '$id'";

                                if ($conexion -> query($sql)) {
                                ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        Se ha borrado la prenda
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php
                                } else {
                                    echo "<p>Error al borrar</p>";
                                }
                            }
                        ?>
                        <?php   //  Seleccionar todas las prendas
                            $sql = "SELECT * FROM prenda";
                            $resultado = $conexion -> query($sql);

                            if ($resultado -> num_rows > 0) {
                                while ($fila = $resultado -> fetch_assoc()) {
                                    $nombre = $fila["nombre"];
                                    $talla = $fila["talla"];
                                    $precio = $fila["precio"];
                                    $categoria = $fila["categoria"];
                                    $imagen = $fila["imagen"];
                                    ?>
                                    <tr>
                                        <td style="color: white;"><?php echo $nombre ?></td>
                                        <td>
                                            <img width="50" height="60" src="../..<?php echo $imagen ?>">
                                        </td>
                                        <td style="color: white;"><?php echo $talla ?></td>
                                        <td style="color: white;"><?php echo $precio ?></td>
                                        <td style="color: white;"><?php echo $categoria ?></td>
                                        <td style="color: white;">
                                            <form action="mostrar_prenda.php" method="get">
                                                <button class="btn btn-primary" type="submit">Ver</button>
                                                <input type="hidden" name="id" value="<?php echo $fila["id"] ?>">
                                            </form>
                                        </td>
                                        <td style="color: white;">
                                            <form action="" method="post">
                                                <button class="btn btn-danger" type="submit">Borrar</button>
                                                <input type="hidden" name="id" value="<?php echo $fila["id"] ?>">
                                            </form>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                        ?>
                    </tbody>
                </table>
                <a class="btn btn-secondary" href="../index.php">Volver</a>   
                <a class="btn btn-primary" href="../clientes/index.php">Siguiente</a>   
            </div>
            <div class="col-3">
                <img width="200" heigth="200" src="../../images/prendasfotos/clientes.jpg">
            
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>