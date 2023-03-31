@extends('otra.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @section('title', "Libro")
    <link rel="stylesheet" type="text/css" href="{{ asset('css/show.css') }}" />
</head>
<body>
    <div class="fondo">
        <div class="container">
            @section('contenido')
            <h3>
                Libro <i>{{ $libro->nombre}}</i>
            </h3>
            <ul>
                <li>
                    Nombre: <strong>{{$libro->nombre}}</strong>
                </li>
                <li>
                    Autor: <strong>{{$libro->autor}}</strong>
                </li>
                <li>
                    Precio: <strong>{{$libro->precio}}</strong>
                </li>
                <li>
                    Descripcion: <strong>{{$libro->descripcion}}</strong>
                </li>
            </ul>
            <hr>
            <div class="row">
            </div>
            @endsection
        </div>
    </div>

</body>
</html>

