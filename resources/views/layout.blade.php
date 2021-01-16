<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabla de Elementos</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="container">
        <ul>
            <li><a href="{{ route('test') }}">Elementos</a></li>
            <li><a href="{{ route('element.create') }}">Crear</a></li>
        </ul>

        
            @yield('content')
        </div>
    </body>
</html>