<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alerta</title>
</head>
<body>
    <div class="alert alert-danger">
        <div class="alert-title">
            {{ $titulo }}
        </div>
        {{ $slot }}
    </div>
</body>
</html>