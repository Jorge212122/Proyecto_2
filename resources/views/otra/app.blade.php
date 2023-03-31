<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body class="bg-light">
    <div class="container shadow bg-white">
        <div class="row">
            <div class="titulo">
                <h1>
                    Libreria
                </h1>
            </div>
            <div class="col-sm-12">
                <a href="{{ route('libro.create') }}" class="btn btn-link">Agregar nuevo libro</a>
                <a href="{{ route('libro.index') }}" class="btn btn-link">Listar libros</a>
            </div>
            <div class="col-sm-12">
                @yield('contenido')
            </div>
        </div>
    </div>
</body>
</html>
