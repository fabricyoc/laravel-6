<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title') - CIDAL</title>
        @stack('styles')
    </head>
    <body>
        @yield('content')

        @stack('scripts')
    </body>
</html>

