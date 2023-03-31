@extends('otra.app')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @section('title', "Nuevo libro")
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
</head>
<body>
    <div class="fondo">
        <div class="container">
            @section('contenido')
            <h3>
                Registrar nuevo libro
            </h3>
            <form action="{{route('libro.store') }}" method="POST">
                <x-libro-formulario/>

            </form>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @endsection
        </div>
    </div>
</body>
</html>
