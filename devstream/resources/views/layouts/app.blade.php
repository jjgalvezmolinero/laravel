<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navegacion</title>
    @vite('resources/css/app.css')
</head>

<body>
    <h1 class="text-4xl font-extrabold">@yield('titulo')</h1>
    <hr>
    @yield('contenido')
</body>

</html>
