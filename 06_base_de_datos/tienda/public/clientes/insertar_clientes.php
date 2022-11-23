<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="clientes.css" />
    <title>Nuevo Cliente</title>
</head>

<body>
    <?php
    require '../../util/control_de_acceso.php';
    require '../../util/base_de_datos.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST["usuario"];
        $nombre = $_POST["nombre"];
        $primer_apellido = $_POST["primer_apellido"];
        $segundo_apellido = $_POST["segundo_apellido"];
        $fecha_nacimiento = $_POST["fecha_nacimiento"];
        $contrasena=$_POST["contrasena"];

        $hash_contrasena = password_hash($contrasena, PASSWORD_DEFAULT);

        $file_name = $_FILES["imagen"]["name"];
        $file_temp_name = $_FILES["imagen"]["tmp_name"];
        $path = "../../images/clientes/" . $file_name;

        if (!empty($usuario) && !empty($nombre) && 
            !empty($primer_apellido) && 
            !empty($fecha_nacimiento)) {

            $segundo_apellido = !empty($segundo_apellido) ? "'$segundo_apellido'" : "NULL";

            if(move_uploaded_file($file_temp_name, $path)){
                echo "<p>Fichero movido con éxito</p>";
                $imagen = "/images/clientes/" . $file_name;
            }else{
                echo "<p>Fichero movido con éxito</p>";
                $imagen = "/images/clientes/messi.jpg";
            }


            $sql = "INSERT INTO clientes (usuario, nombre, primer_apellido, segundo_apellido, fecha_nacimiento, imagen,contrasena)
             VALUES ('$usuario', '$nombre', '$primer_apellido', $segundo_apellido, '$fecha_nacimiento', '$imagen','$hash_contrasena')";

            if ($conexion -> query($sql) == "TRUE") {
                ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Se ha insertado el cliente
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
            } else {
                echo "<p>Error al insertar</p>";
            }
        }
    }
    ?>


    <div class="container">
        <?php require '../header.php' ?>
        <h1>Nuevo cliente</h1>
        <div class="row">
            <div class="col-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <div  style="color: white;" class="form-group mb-3">
                        <label class="form-label">Usuario</label>
                        <input class="form-control" type="text" name="usuario">
                    </div>

                    <div  style="color: white;" class="form-group mb-3">
                        <label class="form-label">Nombre</label>
                        <input class="form-control" type="text" name="nombre">
                    </div>


                    <div  style="color: white;" class="form-group mb-3">
                        <label class="form-label">Primer apellido</label>
                        <input class="form-control" type="text" name="primer_apellido">
                    </div>

                    <div  style="color: white;" class="form-group mb-3">
                        <label class="form-label">Segundo apellido</label>
                        <input class="form-control" type="text" name="segundo_apellido">
                    </div>

                    <div  style="color: white;" class="form-group mb-3">
                        <label class="form-label">Fecha de nacimiento</label>
                        <input class="form-control" type="date" name="fecha_nacimiento">
                    </div>

                    <div  style="color: white;" class="form-group mb-3">
                        <label class="form-label">Imagen</label>
                        <input class="form-control" type="file" name="imagen">
                    </div>


                    
                    <div  style="color: white;" class="form-group mb-3">
                        <label class="form-label">Contraseña</label>
                        <input class="form-control" type="password" name="contrasena">
                    </div>




                    <button class="btn btn-primary" type="submit">Crear</button>
                    <a class="btn btn-secondary" href="index.php">Volver</a>
                </form>
            </div>
            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>