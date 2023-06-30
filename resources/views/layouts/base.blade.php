<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/js/app.js')
    </head>
    <body class="home">
        <div class="container">
            <div class="main">
                @yield('contents')
            </div>
        </div>
    </body>
</html>