<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consolas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <h1>Index de Consolas</h1>

    <p>{{ $mensaje }}</p>





    
    <a href="{{ route('consolas.create') }}" class="btn btn-success">Crear Consola</a>


    <table class=table>
    <tr>
        <th>Nombre</th>
        <th>Año de Salida</th>
        <th>Generacion</th>
        <th>Descripción</th>

    </tr>
<tbody>

    @foreach($consolas as $consola)
        <tr>
            <td>{{ $consola -> nombre }}</td>
            <td>{{ $consola -> año_salida }}</td>
            <td>{{ $consola -> generacion }}</td>
            <td>{{ $consola -> descripcion }}</td>

            @php
            $videojuegos = $consola -> videojuegos;
                                   @endphp
                                   @foreach($videojuegos as $videojuego)
                                       <tr>
                                           <td>{{ $videojuego -> titulo }}</td>
                                           <td></td>
                                           <td></td>
                                           @endforeach  

            <td>
                <form method="get" action="{{ route('consolas.show', ['consola' => $consola-> id]) }}">
                    <button class="btn btn-primary" type="submit">Ver</button>
                </form>
                </td>

                <td>
                    <form method="get" action="{{ route('consolas.edit', ['consola' => $consola-> id]) }}">
                        @csrf
                        {{method_field('UPDATE')}}
                        <button class="btn btn-primary" type="submit">Editar</button>
                    </form>
                    </td>

                <td>
                    <form method="post" action="{{ route('consolas.destroy', ['consola' => $consola -> id]) }}">
                        @csrf
                        {{method_field('DELETE')}}
                        <button class="btn btn-danger" type="submit">Borrar</button>
    
                </td>

        </tr>
        {{-- Comentario Blade --}}
    @endforeach
   
    </tbody>

    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>

