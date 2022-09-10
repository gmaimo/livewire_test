<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
        @vite(['resources/css/app.css'])
        @livewireStyles
    </head>
    <body class="antialiased">

        {{ $slot }}

        <!-- Scripts -->
        @vite(['resources/js/app.js'])
        @livewireScripts
    </body>
</html>
