<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 </title>
</head>

<body>
    <?php
    $series = [
        ["La que se avecina", "Amazon", 13],
        ["Hora de aventuras", "Boing", 20],
        ["La casa de papel", "Nexflix", 6],
        ["Doramon", "Boing", 200],
        ["Tom y Jerry", "Boing", 40],

    ];




    ?>
    <table>
        <tr>
            <th>Título</th>
            <th>Plataforma</th>
            <th>Temporadas</th>
        </tr>
        <?php
        foreach ($series as $serie) {
            list($titulo, $plataforma, $temporada) = $serie;
        ?>
            <tr>
                <td><?php echo $titulo ?></td>
                <td><?php echo $plataforma ?></td>
                <td><?php echo $temporada ?></td>
            </tr>
        <?php

        }



        ?>


    </table>

    <table>

        <tr>
            <th>Título</th>
            <th>Plataforma</th>
            <th>Temporadas</th>
        </tr>
        <?php
        $temporada = array_column($series, 2);
        array_multisort($temporada, SORT_DESC, $series);
        foreach ($series as $serie) {
            list($titulo, $plataforma, $temporada) = $serie;
        ?>
            <tr>
                <td><?php echo $titulo ?></td>
                <td><?php echo $plataforma ?></td>
                <td><?php echo $temporada ?></td>
            </tr>
        <?php

        }



        ?>
    </table>


    <table>

        <tr>
            <th>Título</th>
            <th>Plataforma</th>
            <th>Temporadas</th>
        </tr>
        <?php
        $titulo = array_column($series, 0);
        $plataforma = array_column($series, 1);
        array_multisort($plataforma, SORT_ASC, $titulo, SORT_ASC, $series);
        foreach ($series as $serie) {
            list($titulo, $plataforma, $temporada) = $serie;
        ?>
            <tr>
                <td><?php echo $titulo ?></td>
                <td><?php echo $plataforma ?></td>
                <td><?php echo $temporada ?></td>
            </tr>
        <?php

        }



        ?>
    </table>





</body>

</html>