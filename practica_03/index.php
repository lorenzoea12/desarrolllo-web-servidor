<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Tablas</title>



    <title>Practica 3</title>
</head>

<body>

<style>
    body{
        background-color: grey;
    }

    h3{
        color: white;
    }



</style>

    <h3>Ejercicio 3 </h3>



    <?php

    //Ejercicio 1 
    $alimentos = [
        ["Lentejas", 2.5],
        ["Melón", 3],
        ["Sandia", 4],
        ["Garbanzos", 2],
        ["Avellanas", 3],
    ];

    //Ejercicio 2 
    $alimentos1 = [
        ["Lentejas", 2.5, 6],
        ["Melón", 3, 2],
        ["Sandia", 4, 3],
        ["Garbanzos", 2, 4],
        ["Avellanas", 3, 2],
    ];




        //Ejercicio 3

       

        for ($i = 1; $i <= 50; $i++) {
            $numeros[] = $i;
        }
    
        for ($i = 0; $i < count($numeros); $i++) {
            if ($numeros[$i] % 3 == 0) {
                unset($numeros[$i]);
            }
        }
    
        $numeros = array_values($numeros);
        for ($i = 0; $i < count($numeros); $i++) {
            echo $numeros[$i] . " ";
        }



    //Ejercicio 4 

    $personas = [
        ["Lorenzo", "Escobar", rand(0, 100)],
        ["Ana", "García", rand(0, 100)],
        ["Pedro", "Lopez", rand(0, 100)],
        ["Antonio", "Benitez", rand(0, 100)],
    ];


    function tipo_persona($edad)
    {
        $tipo_persona = match (TRUE) {
            $edad >= 65 => "jubilado",
            $edad  <= 17 => "menor de edad",
            $edad >= 18 => "adulto",
        };
        return $tipo_persona;
    }

    //Ejercicio 5 

    $dnis = [
        ["26325820C", "Lorenzo"],
        ["32325820F", "Manuel"],
        ["45675820C", "Rocio"],
        ["49341121A", "Moises"],
        ["54238204H", "Jose"],
        ["74905042E", "Carmen"]

    ];




    function is_valid_dni($dni)
    {
        $patron_dni = "/^[0-9]{8}[a-zA-Z]$/";
        $numbers = substr($dni, 0, -1);
        $letter = substr($dni, -1);
        //COmprobar DNI
        if (!empty($dni)) {
            if (
                preg_match($patron_dni, $dni) &&
                substr("TRWAGMYFPDXBNJZSQVHLCKE", $numbers % 23, 1) == $letter && strlen($letter) == 1 && strlen($numbers) == 8
            ) {
                echo "El dni es correcto";
            } else {
                echo "El dni no es válido ";
            }
        } else {
            echo "El dni es obligatorio";
        }
    }








    ?>


       <br><br>

    <div class="container">
    <h3>Ejercicio 1</h3>
        <div class="row">
            <div class="col">
                <table class=" table table-secondary , table-bordered border-dark">
                    <tr class=" table table-primary , table-bordered border-dark">
                        <th>Productos</th>
                        <th>Precios</th>

                    </tr>
                    <?php
                    $productos = array_column($alimentos, 0);
                    array_multisort($productos, SORT_ASC, $alimentos);
                    $precioTotal = 0.0;
                    foreach ($alimentos as $alimento) {
                        list($productos, $precios) = $alimento;
                        $precioTotal += $precios;
                    ?>
                        <tr>
                            <td class=" td  table-danger , table-bordered border-dark"><?php echo $productos ?></td>
                            <td class="td  table table-warning , table-bordered border-dark"><?php echo $precios ?></td>

                        </tr>
                    <?php
                    }
                    ?>
                    <td>
                    <td>
                    <td class=" td  table-danger"><?php echo "Total Producto:" . count($alimentos) ?></td>
                    <td>
                    <td>
                    <td class=" td  table-warning"><?php echo "Total Precio:" . $precioTotal ?></td>


                </table>


            </div>

        </div>

    </div>

    








    <div class="container">
        <h3>Ejercicio 2</h3>
        <div class="row">
            <div class="col">
                <table class=" table table-primary , table-bordered border-primary">
                    <tr class=" td table-success , table-bordered border-primary">
                        <th>Productos</th>
                        <th>Precios</th>
                        <th>Cantidad</th>
                        <th>Subtotal</th>
                    </tr>
                    <?php
                    $productos = array_column($alimentos1, 0);
                    array_multisort($productos, SORT_ASC, $alimentos1);
                    $precioTotal = 0.0;
                    $cantidadTotal = 0.0;
                    foreach ($alimentos1 as $alimento1) {
                        list($productos, $precios, $cantidad) = $alimento1;
                        $cantidadTotal += $cantidad;
                        $subtotal = $precios * $cantidad;
                        $precioTotal += $subtotal;

                    ?>
                        <tr>
                            <td class=" td table-dark , table-bordered border-primary"><?php echo $productos ?></td>
                            <td class=" td table-danger , table-bordered border-primary"><?php echo $precios ?></td>
                            <td class=" td table-warning , table-bordered border-primary"><?php echo $cantidad ?></td>
                            <td class=" td table-light , table-bordered border-primary"><?php echo $subtotal ?></td>


                        </tr>
                    <?php
                    }
                    ?>
                    <td>
                    <td>
                    <td class=" td table-success , table-bordered border-primary"><?php echo "Total Producto:" . $cantidadTotal ?></td>
                    <td>
                    <td>
                    <td class=" td table-info , table-bordered border-primary"><?php echo "Total Precio:" . $precioTotal ?></td>


                </table>



            </div>

        </div>

    </div>






                    
    <div class="container">
        <h3> Ejercicio 4</h3>
        
        <div class="row">
            <div class="col">
                <table class=" table table-success , table-bordered border-danger ">
                    <tr class=" tr table-dark , table-bordered border-danger">
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Edad</th>
                        <th>Tipo_persona</th>
                    </tr>
                    <?php
                    $nombre = array_column($personas, 0);
                    array_multisort($nombre, SORT_ASC, $personas);
                    foreach ($personas as $persona) {
                        list($nombre, $apellido, $edad) = $persona;


                    ?>
                        <tr>
                            <td class=" td table-warning , table-bordered border-danger"><?php echo $nombre ?></td>
                            <td class=" td table-info , table-bordered border-danger"><?php echo $apellido ?></td>
                            <td class=" td table-danger , table-bordered border-danger "><?php echo $edad ?></td>
                            <td class=" td table-secondary , table-bordered border-danger"><?php echo tipo_persona($edad) ?></td>



                        </tr>
                    <?php
                    }
                    ?>

                </table>

            </div>

        </div>

    </div>
   
    

 <div class="container">
        <h3> Ejercicio  5</h3>
    <div class="row">
        <div class="col">
        <table class=" table table-secondary , table-bordered border-warning">
                    <tr class=" tr table-primary , table-bordered border-warning">
                        <th>Carnet Identidad</th>
                        <th>Nombre</th>
                        <th>Validacion Dni</th>

                    </tr>
                    <?php
                    foreach ($dnis as $dni) {
                        list($carnet_identidad, $nombre) = $dni;


                    ?>
                        <tr>
                            <td class="td  table-success , table-bordered border-warning " table><?php echo $carnet_identidad ?></td>
                            <td class="td table-danger , table-bordered border-warning"><?php echo $nombre ?></td>
                            <td class="td table-dark , table-bordered border-warning"><?php echo is_valid_dni($carnet_identidad) ?></td>




                        </tr>
                    <?php
                    }
                    ?>
               </table>


        </div>

    </div>

 </div>

 

  






    
















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>






   






</body>

</html>