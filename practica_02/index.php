<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 2 </title>
    <style>
        body {
            background-color: yellow;

        }

       
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

</head>

<body>

    <h2>Practica 2</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dni = $_POST['dni'];
        $temp_dni = depurar($_POST["dni"]);
        $temp_nombre = depurar($_POST["nombre"]);
        $temp_primerApellido = depurar($_POST["primerApellido"]);
        $temp_segundoApellido = depurar($_POST["segundoApellido"]);
        $temp_edad = depurar($_POST["edad"]);
        $temp_email = depurar($_POST["email"]);
        $patron_dni = "/^[0-9]{8}[a-zA-Z]$/";
        $numbers = substr($dni, 0, -1);
        $letter = substr($dni, -1);
        //COmprobar DNI
        if (!empty($dni)) {
            if (
                preg_match($patron_dni, $dni) &&
                substr("TRWAGMYFPDXBNJZSQVHLCKE", $numbers % 23, 1) == $letter && strlen($letter) == 1 && strlen($numbers) == 8
            ) {
            } else {
                $err_dni = "El dni no es válido ";
            }
        } else {
            $err_dni = "El dni es obligatorio";
        }



        if (empty($temp_edad)) {
            $err_edad = "La edad es obligatoria";
        } else {
            if ($temp_edad >= 1 && $temp_edad < 18) {
                $err_edad = " Eres menor de edad ";
            } else {
                $temp_edad = filter_var($temp_edad, FILTER_VALIDATE_INT);
                if (!$temp_edad) {
                    $err_edad = "La edad debe ser un numero";
                } else {
                    if ($temp_edad <= 0 || $temp_edad > 120) {
                        $err_edad = "La edad introducida es incorrecta";
                    } else {
                        $err_edad = $temp_edad;
                    }
                }
            }
        }

        if (empty($temp_email)) {
            $err_email = "El email es obligatorio";
        } else {
            $temp_email = filter_var($temp_email, FILTER_VALIDATE_EMAIL);
            if (!$temp_email) {
                $err_email = "El email no es valido";
            } else {
                if (str_contains($temp_email, 'Ostia')) {
                    $err_email = "No digas palabras malas";
                } else {
                    if (str_contains($temp_email, 'Puta')) {
                        $err_email = "No pongas palabras feas";
                    } else {
                        if (str_contains($temp_email, 'Cabron')) {
                            $err_email = "No insultes porfavor";
                        } else {

                            $err_email = $temp_email;
                        }
                    }
                }
            }
        }


        if (empty($temp_nombre)) {
            $err_nombre = "El nombre es obligatorio";
        } else {

            $pattern = "/^[a-zA-Z áéíóúÁÉÍÓÚñÑ]+$/";
            if (!preg_match($pattern, $temp_nombre)) {
                $err_nombre = "El nombre solo puede contener letras";
            } else {
                $err_nombre = ucwords(strtolower($temp_nombre));
            }
        }

        if (empty($temp_primerApellido)) {
            $err_primerApellido = "El primerApellido es obligatorio";
        } else {
            ucwords(strtolower($temp_primerApellido));
            $pattern = "/^[a-zA-Z áéíóúÁÉÍÓÚñÑ]+$/";
            if (!preg_match($pattern, $temp_primerApellido)) {
                $err_primerApellido = "El primerApellido solo puede contener letras";
            } else {
                $err_primerApellido = ucwords(strtolower($temp_primerApellido));
            }
        }


        if (empty($temp_segundoApellido)) {
            $err_segundoApellido = "El segundoApellido es obligatorio";
        } else {
            ucwords(strtolower($temp_segundoApellido));
            $pattern = "/^[a-zA-Z áéíóúÁÉÍÓÚñÑ]+$/";
            if (!preg_match($pattern, $temp_segundoApellido)) {
                $err_segundoApellido = "El segundoApellido solo puede contener letras";
            } else {
                $err_segundoApellido = ucwords(strtolower($temp_segundoApellido));
            }
        }



        if (
            isset($dni) && isset($nombre) &&
            isset($primerApellido) && isset($segundoApellido) && isset($edad) && isset($email)
        ) {

            echo '<script language="javascript">alert("' . $dni . '");</script>';
            echo "<p>$nombre</p>";
            echo "<p>$primerApellido</p>";
            echo "<p>$segundoApellido</p>";
            echo "<p>$edad</p>";
            echo "<p>$email</p>";
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



    <form action="" method="post">


        <p>DNI: <input type="text" name="dni">
            <span class="error">
                * <?php if (isset($err_dni)) echo $err_dni ?>
            </span>
        </p>


        <p>Nombre: <input type="text" name="nombre">
            <span class="error">
                * <?php if (isset($err_nombre)) echo $err_nombre ?>
            </span>
        </p>

        <p>Primer Apellido: <input type="text" name="primerApellido">
            <span class="error">
                * <?php if (isset($err_primerApellido)) echo $err_primerApellido ?>
            </span>
        </p>
        <p>Segundo Apellido: <input type="text" name="segundoApellido">
            <span class="error">
                * <?php if (isset($err_segundoApellido)) echo $err_segundoApellido ?>
            </span>
        </p>

        <p>Edad: <input type="text" name="edad">
            <span class="error">
                * <?php if (isset($err_edad)) echo $err_edad ?>
            </span>
        </p>
        <p>Correo Eléctronico: <input type="text" name="email">
            <span class="error">
                * <?php if (isset($err_email)) echo $err_email ?>
            </span>
        </p>
        <p><input type="submit" value="Crear"></p>





    </form>

</body>

</html>