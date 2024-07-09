<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Crear Viajero</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Viajero</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('viajero.index')}}">Listar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('viajero.create')}}">Crear</a>
                </li>
            </ul>
          </div>
        </div>
    </nav>
    <div class="d-flex justify-content-center align-items-center flex-column" style="height: calc(100vh - 56px);">
        <h1 class="mb-3">Crear Viajero</h1>
        <form class="w-25" action="{{route('viajero.store')}}" method="POST">
            @csrf
           
            <div class="form-floating mb-3">
                <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre">
                <label for="nombre">Nombre</label>
            </div>
            <div class="form-floating mb-3">
                <input name="direccion" type="text" class="form-control" id="direccion" placeholder="Dirección">
                <label for="direccion">Dirección</label>
            </div>
            <div class="form-floating mb-3">
                <input name="telefono" type="text" class="form-control" id="telefono" placeholder="telefono">
                <label for="telefono">Teléfono</label>
            </div>

            
            
            <button type="submit" class="btn btn-success w-100">Crear</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>