<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1 style="text-align: center;">Login</h1>
    <form action="{{ route('sessao.logado') }}" method="post">
        @csrf
        <label for="">Login:</label>
        <input type="text" name="login">
        <label for="">Senha:</label>
        <input type="password" name="password">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>