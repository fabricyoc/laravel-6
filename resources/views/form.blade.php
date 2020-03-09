<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício: View</title>
</head>
<body>
    <form action="{{ route('show.calcularform') }}" method="post">
        @csrf
        <label for="n1">Campo 1:</label>
        <input type="number" name="n1" id="n1"/><br>
        <label for="n2">Campo 2:</label>
        <input type="number" name="n2" id="n2"/><br>
        <input type="submit" value="Enviar"/>
    </form>
</body>
</html>