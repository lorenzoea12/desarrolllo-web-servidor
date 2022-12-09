<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Categorías</title>
</head>
<body>
    <h1>Index de categorías</h1>

   

    <a href="{{ route('categorias.create') }}" class="btn btn-success">Crear Producto</a>


    <table class=table>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
         
         
    
        </tr>
    <tbody>
    
        @foreach($categorias as $categoria)
            <tr>
                <td>{{ $categoria -> nombre }}</td>
                <td>{{ $categoria -> descripcion }}</td>
             
                @php
                $productos = $categoria -> productos;
                                       @endphp
                                       @foreach($productos as $producto)
                                           <tr>
                                               <td>{{ $producto -> nombre }}</td>
                                               <td></td>
                                               <td></td>
                                               @endforeach                           
              
                <td>
                <form method="get" action="{{ route('categorias.show', ['categoria' => $categoria -> id]) }}">
                    <button class="btn btn-primary" type="submit">Ver</button>
                </form>
                </td>
               
    
                <td>
                    <form method="post" action="{{ route('categorias.destroy', ['categoria' => $categoria -> id]) }}">
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
</body>
</html>