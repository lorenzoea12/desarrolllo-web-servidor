<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Nueva Consola</title>    
</head>
<body>
    <h1>Nueva Consola</h1><br><br>

        <table class="table">
            <form method="POST" action="{{ route('consolas.update', ['consola' => $consola -> id]) }}">
                {{ method_field('PUT') }}
                @csrf
                    <div class="form-group mb-3" >
                        <label class="form-label">Nombre</label>
                        <input class="form-control" type="text" name="nombre" value="{{ $consola->nombre }}">
                    </div><br>
                    <div class="form-group mb-3">
                        <label class="form-label">Año Salida</label>
                        <input class="form-control" type="date" name="año_salida" value="{{ $consola->año_salida}}">
                    </div><br>
                    <div class="form-group mb-3">
                        <label class="form-label">Generacion</label>
                        <select class="form-select" name="generacion" value="{{ $consola->generacion}}">
                            <option value="" selected disabled hidden>-- Selecciona la generacion --</option>
                            <option value="1 generacion">Next gen</option>
                            <option value="2 generacion "> Old gen</option>
                      
                        </select>
                        <div class="form-group mb-3">
                            <label class="form-label">Descripción</label>
                            <textarea class=form-control name="descripcion" value="{{ $consola->descripcion }}"></textarea>
                        </div>
                    <button class="btn btn-primary" type="submit">Crear</button>
                </form>
            </table>

                
                
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>



</body>
</html>

