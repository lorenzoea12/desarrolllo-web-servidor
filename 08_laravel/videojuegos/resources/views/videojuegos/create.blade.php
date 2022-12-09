<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Nuevo Videojuego</title>    
</head>
<body>
    <h1>Nuevo Videojuego</h1><br><br>

        <table class="table">
              <form method="post" action="{{ route('videojuegos.store') }}">
                @csrf
                    <div class="form-group mb-3" >
                        <label class="form-label">Titulo</label>
                        <input class="form-control" type="text" name="titulo">
                    </div><br>

                 


                    <div class="form-group mb-3">
                        <label class="form-label">Precio</label>
                        <input class="form-control" type="text" name="precio">
                    </div><br>
                    <div class="form-group mb-3">
                        <label class="form-label">PEGI</label>
                        <select class="form-select" name="pegi">
                            <option value="" selected disabled hidden>-- Selecciona el pegi --</option>
                            <option value="3">+3</option>
                            <option value="7">+7</option>
                            <option value="12">+12</option>
                            <option value="16">+16</option>
                            <option value="18">+18</option>
                        </select>


                        <div class="form-group mb-3">
                            <label class="form-label">Compañía</label>
                            <select class="form-select" name="compania_id">
                            @foreach($companias as $compania)
                                <option value="{{ $compania -> id }}">
                                    {{ $compania -> nombre }}
                                </option>
                            @endforeach
                            </select>
                        </div>

                    </div><br>
                    <label class="form-label">Dl
                        escripción:</label>
                    <div class="form-group mb-3">
                        <textarea name="descripcion"  cols="50" rows="10"></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Crear</button>
                </form>
            </table>

                
                
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>



</body>
</html>

