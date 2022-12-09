<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Companias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <h1>Index de Companias</h1>

    <p>{{ $mensaje }}</p>
 



    
    <a href="{{ route('companias.create') }}" class="btn btn-success">Crear Compannia</a>


    <table class=table>
    <tr>
        <th>Nombre</th>
        <th>Sede</th>
        <th>Fecha Fundacion</th>
       


    </tr>
<tbody>

    @foreach($companias as $compania)
        <tr>
            <td>{{ $compania -> nombre }}</td>
            <td>{{ $compania -> sede }}</td>
            <td>{{ $compania -> fecha_fundacion}}</td>


        @php
     $videojuegos = $compania -> videojuegos;
                            @endphp
                            @foreach($videojuegos as $videojuego)
                                <tr>
                                    <td>{{ $videojuego -> titulo }}</td>
                                    <td></td>
                                    <td></td>
                                    @endforeach  


            <td>
                <form method="get" action="{{ route('companias.show', ['compania' => $compania-> id]) }}">
                    <button class="btn btn-primary" type="submit">Ver</button>
                </form>
                </td>

                <td>
                    <form method="get" action="{{ route('companias.edit', ['compania' => $compania-> id]) }}">
                        @csrf
                        {{method_field('UPDATE')}}
                        <button class="btn btn-primary" type="submit">Editar</button>
                    </form>
                    </td>

                <td>
                    <form method="post" action="{{ route('companias.destroy', ['compania' => $compania -> id]) }}">
                        @csrf
                        {{method_field('DELETE')}}
                        <button class="btn btn-danger" type="submit">Borrar</button>
                    </form>
                </td>

        </tr>
        {{-- Comentario Blade --}}
    @endforeach
   
    </tbody>

    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>

