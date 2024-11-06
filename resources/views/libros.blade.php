<!DOCTYPE html>
<html>
    <head>
        <title>Libros Davi</title>
    </head>
    <body>
        <h1>Libros</h1>
        <form action="/libros/store" method="POST">
            @csrf
            <input type="text" name="isan" placeholder="insertar isan">
            <input type="text" name="titulo" placeholder="insertar titulo">
            <input type="year" name="ano" placeholder="insertar año">
            <input type="text" name="director" placeholder="insertar director">
            <button type="submit">Insertar datos</button>
        </form>

        <form action="/libros/create"><button>Crear</button></form>
        <form action="/libros/show"><button>Lista</button></form>
        <form action="/libros/update"><button>Actualizar</button></form>
        <form action="/libros/delete"><button>Eliminar</button></form>
    </body>
</html>