<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- FontAwesome para los iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
</head>
<body>
    <!-- Navegación Bootstrap -->
    <nav class="navbar  navbar-light bg-light">
        
        @include('components.layouts.navegacion')

    </nav>

    <!-- Contenido principal -->
   @yield('contenido')
   
   @include('components.footer')

</body>
</html>