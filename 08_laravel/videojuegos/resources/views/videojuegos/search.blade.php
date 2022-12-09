<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videojuegos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <h1>Busqueda de Videojuegos</h1>

  





    
    <a href="{{ route('videojuegos.create') }}" class="btn btn-success">Crear Videojuego</a>



<form>
    <div class="form-group mb-3">
        
    </div>
    
    
   
</form>

    <table class=table>
    <tr>
        <th>Título</th>
        <th>Precio</th>
        <th>Pegi</th>
        <th>Descripción</th>

    </tr>
<tbody>

    @foreach($videojuegos as $videojuego)
        <tr>
            <td>{{ $videojuego -> titulo }}</td>
            <td>{{ $videojuego -> precio }}</td>
            <td>{{ $videojuego -> pegi }}</td>
            <td>{{ $videojuego -> descripcion }}</td>

            <td>
            <form method="get" action="{{ route('videojuegos.show', ['videojuego' => $videojuego -> id]) }}">
                <button class="btn btn-primary" type="submit">Ver</button>
            </form>
            </td>
            <td>
                <form method="get" action="{{ route('videojuegos.edit', ['videojuego' => $videojuego -> id]) }}">
                    @csrf
                    {{method_field('UPDATE')}}
                    <button class="btn btn-primary" type="submit">Editar</button>

            </td>

            <td>
                <form method="post" action="{{ route('videojuegos.destroy', ['videojuego' => $videojuego -> id]) }}">
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

