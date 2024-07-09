<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Listar Viajeros</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="light">
        <div class="container-fluid">
          <a class="navbar-brand " href="#" >Viajero</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('viajero.index')}}">Listar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('viajero.create') }}">Crear</a>
                </li>
            </ul>
          </div>
        </div>
    </nav>
    
    
    <!-- Tabla -->
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Dirección</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($viajeros as $viajero)
                <tr>
                    <!-- nombres exactos como la base de datos  -->
                    <th scope="row">{{$viajero->id}}</th>
                    <td>{{$viajero->nombre}}</td>
                    <td>{{$viajero->direccion}}</td>
                    <td>{{$viajero->telefono}}</td>
                    <td>

                    <!-- botones para llamado a la accion -->
                        <button type="button" class="btn btn-info" style="background-color: #90b8f5; border-color: #90b8f5;" onclick="location.href='{{ route('viajero.show', $viajero->id) }}'">Ver</button>

                        <button type="button" class="btn btn-info" style="background-color: #e6e6fa; border-color: #e6e6fa;" onclick="location.href='{{ route('viajero.edit', $viajero->id) }}'">Editar</button>

                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#viajero{{$viajero->id}}">Eliminar</button>
                        <!-- Modal eliminar -->
                        <div class="modal fade" id="viajero{{$viajero->id}}" tabindex="-1" aria-labelledby="viajero{{$viajero->id}}Label" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="viajero{{$viajero->id}}Label">Eliminar Registro</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>¿Seguro que quieres eliminarlo?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                                    <form action="{{route('viajero.destroy', $viajero->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>