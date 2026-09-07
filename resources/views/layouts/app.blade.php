<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>TecAsset - @yield('title', 'Tecnologia sob controle')</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="flex">
        <x-sidebar />
        <main class="flex-1 p-8">
            @yield('content')
        </main>
    </body>
</html>
