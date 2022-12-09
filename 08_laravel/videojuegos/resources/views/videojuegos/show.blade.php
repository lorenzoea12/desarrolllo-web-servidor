<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
    <title>Hola mundo</title>
</head>
<body>
    <div class="container">
    <h1>Mostrar Videojuegos</h1>
    <p>Titulo: {{$videojuego -> titulo}}</p>
    <p>Titulo: {{$videojuego -> precio}}</p>
    <p>Titulo: {{$videojuego -> pegi}}</p>
    <p>Titulo: {{$videojuego -> descripcion}}</p>

    <form method="get" action="{{ route('videojuegos.edit', ['videojuego' => $videojuego-> id]) }}">
        <button class="btn btn-primary" type="submit">Modificar</button>
    </form>
   
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>