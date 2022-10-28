<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 </title>

</head>

<body>
    <?php
    /*
    $estudiantes = [
        ["Lorenzo", rand(0, 10)],
        ["Pedro", rand(0, 10)],
        ["Manuel", rand(0, 10)],
        ["Moises", rand(0, 10)],
        ["Antonio", rand(0, 10)],
    ];
    */

   

    $estudiantes = [
        ["Luis"],
        ["Alfredo"],
        ["Elena"]
    ];

    for ($i = 0; $i < count($estudiantes); $i++) {
        $estudiantes[$i][1] = rand(0,10);
        $estudiantes[$i][2] = rand(0,10);
        $estudiantes[$i][3] = rand(0,10);
    }



    function calificacion($nota){
        $calificacion_final = match($nota){
        0,1,2,3,4 =>"suspenso",
        5=>"suficiente",
        6=>"bien",
        7,8=>"notable",
        9,10=>"sobresaliente",
        default=>"nota no valida"

    };
    return $calificacion_final;
    }


    function calificacion1($nota){
        switch($nota){
            case 1:
            case 2:
            case 3:
            case 4:
                $calificacion1= "Suspenso";
                break;
            case 5:
                $calificacion1= "Suficiente";
                break;
            case 6:
                $calificacion1= "Bien";
            case 7:
            case 8:
                  $calificacion1="Notable";
            case 9:
            case 10:
                $calificacion1= "Sobresaliente";
                break;
            default: 
            $calificacion1=  "La nota no es valida";
                
        }
        return $calificacion1;
    }

    ?>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Nota 3</th>
            <th>CalificacionFinal</th>
        </tr>
        <?php
         $nombre = array_column($estudiantes, 0);
    
        array_multisort($nombre, SORT_ASC, $estudiantes);
       
        foreach ($estudiantes as $estudiante) {
            list($nombre, $nota1,$nota2,$nota3) = $estudiante;
            $media=(int)round($nota1+$nota2+$nota3)/10;
        ?>
            <tr>
                <td><?php echo $nombre ?></td>
                <td><?php echo $nota1 ?></td>
                <td><?php echo $nota2 ?></td>
                <td><?php echo $nota3 ?></td>
                <td><?php echo calificacion($media)?></td>

                
            </tr>
        <?php

        }



        ?>


</body>

</html>