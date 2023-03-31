@extends('otra.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @section('title', "Lista de libros")
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}" />
</head>
<body>
    <div class="fondo">
        <div class="container">
            @section('contenido')
            <h3>
                Lista de libros
            </h3>
            <table class="table table-stripped table-hover">
                <thead>
                    <tr>
                        <th>
                            Nombre
                        </th>
                        <th>
                            Autor
                        </th>
                        <th>
                            Precio
                        </th>
                        <th>
                            Descripcion
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($registro as $libro)
                        <tr>
                            <td>
                                {{$libro->nombre}}
                            </td>
                            <td>
                                {{$libro->autor}}
                            </td>
                            <td>
                                {{$libro->precio}}
                            </td>
                            <td>
                                {{$libro->descripcion}}
                            </td>
                            <td>
                                <a href="{{ route('libro.edit', $libro) }}">Editar</a>
                                <a href="{{ route('libro.show', $libro) }}">ver</a>
                                <form action="{{route('libro.destroy', $libro)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm" type="submit">
                                        Borrar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @endsection
        </div>
    </div>
</body>
</html>
