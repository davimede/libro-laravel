<!DOCTYPE html>
<html>
    <head>
        <title>Libros Davi</title>
    </head>
    <body>
    <h1>Libros</h1>

    <h2>Todos los libros</h2>
    <ul>
        @foreach ($libros as $libro)
        <li>
            <p>{{ $libro->titulo }}, {{ $libro->ano }}</p>
        </li>
        @endforeach
    </ul>
    </body>
</html>