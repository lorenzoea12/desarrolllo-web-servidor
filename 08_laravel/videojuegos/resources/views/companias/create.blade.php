<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Nueva Compania</title>    
</head>
<body>
    <h1>Nueva Compania</h1><br><br>

        <table class="table">
              <form method="post" action="{{ route('companias.store') }}">
                @csrf
                    <div class="form-group mb-3" >
                        <label class="form-label">Nombre</label>
                        <input class="form-control" type="text" name="nombre">
                    </div><br>
                    <div class="form-group mb-3">
                        <label class="form-label">Sede</label>
                        <input class="form-control" type="text" name="sede">
                    </div><br>

                    <div class="form-group mb-3">
                        <label class="form-label">Fecha Fundacion</label>
                        <input class="form-control" type="date" name="fecha_fundacion">
                    </div><br>
                    <button class="btn btn-primary" type="submit">Crear</button>
                </form>
            </table>

                
                
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>



</body>
</html>

