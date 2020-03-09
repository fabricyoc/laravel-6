<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema - @yield('titulo')</title>
        <link href="{{ asset('css/estilo.css') }}" rel="stylesheet" >
    </head>
    <body>
        <!-- <p id="rel">TESTANDO</p> -->
        @section('cabecalho')
            <h2>Tela de Login</h2>
        @show

        @yield('conteudo')


    </body>
</html>