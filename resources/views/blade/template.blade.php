<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema - @yield('titulo')</title>
    </head>
    <body>
        @section('cabecalho')
            <h1>Cabeçalho da Página</h1>
        @show

        @yield('conteudo')
    </body>
</html>