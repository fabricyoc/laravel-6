<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Arquivo</title>
</head>
<body>
    <form action="{{ route('enviararquivo') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="arquivo"/><br>
        <input type="submit" value="Enviar"/>
    </form>
</body>
</html>