<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Tienda de Ropa')</title>
</head>
<body>
    @include('partials.nav')

    <main>
        @yield('content')
    </main>
</body>
</html>