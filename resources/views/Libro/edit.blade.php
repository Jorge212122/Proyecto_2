@extends('otra.app')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @section('title', "Editar libro")
    <link rel="stylesheet" type="text/css" href="{{ asset('css/edit.css') }}" />
</head>
<body>
    <div class="fondo">
        <div class="container">
            @section('contenido')
            <h3>
                Editar libro <i>{{ $libro->nombre}}</i>
            </h3>
            <form action="{{route('libro.update', $libro) }}" method="POST">
                @method('put')
                <x-libro-formulario :libro="$libro"/>
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
