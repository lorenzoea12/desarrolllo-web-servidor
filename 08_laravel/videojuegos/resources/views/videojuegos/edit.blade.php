<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola mundo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Editar videojuego</h1>

        <div class="row">
            <div class="col-9">
                <form method="POST" action="{{ route('videojuegos.update', ['videojuego' => $videojuego -> id]) }}">
                    {{ method_field('PUT') }}
                    @csrf
                    <div class="form-group mb-3">
                        <label class="form-label">Título</label>
                        <input class="form-control" type="text" name="titulo" value="{{ $videojuego->titulo }}">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Precio</label>
                        <input class="form-control" type="number" name="precio" value="{{ $videojuego->precio }}">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">PEGI</label>
                        <select class="form-select" name="pegi" value="{{ $videojuego->pegi }}">
                            <option value="3">PEGI 3</option>
                            <option value="7">PEGI 7</option>
                            <option value="12">PEGI 12</option>
                            <option value="16">PEGI 16</option>
                            <option value="18">PEGI 18</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Descripción</label>
                        <textarea class=form-control name="descripcion" value="{{ $videojuego->descripcion }}"></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Crear</button>
                </form>
            </div>
        </div>
    </div> 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>