<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Productos</h1>
  

    <a href="{{ route('productos.create') }}" class="btn btn-success">Crear Producto</a>

    <table class=table>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Fecha Lanzamiento</th>
            <th>Descripcion</th>
            <th>Categoria</th>
         
         
    
        </tr>
    <tbody>
    
        @foreach($productos as $producto)
            <tr>
                <td>{{ $producto -> nombre }}</td>
                <td>{{ $producto -> precio }}</td>
                <td>{{ $producto -> fecha_lanzamiento }}</td>
                <td>{{ $producto -> descripcion }}</td>
                <td>{{ $producto -> categoria->nombre }}</td>
             
    
                
              
                <td>
                <form method="get" action="{{ route('productos.show', ['producto' => $producto -> id]) }}">
                    <button class="btn btn-primary" type="submit">Ver</button>
                </form>
                </td>
              
    
                <td>
                    <form method="post" action="{{ route('productos.destroy', ['producto' => $producto-> id]) }}">
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
    
    
    
</body>
</html>