<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    @vite('resources/css/app.css')
</head>

<body>
    <main>
        <h2 class="container mx-auto">
            @yield('titulo')
        </h2>
        @yield('contenido')
    </main>
</body>

</html>
