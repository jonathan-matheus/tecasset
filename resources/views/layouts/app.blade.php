<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>TecAsset - @yield('title', 'Tecnologia sob controle')</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div>
            <p>[sidebar vai entrar aqui no próximo conceito]</p>
        </div>
        <main>
            @yield('content')
        </main>
    </body>
</html>
