<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $titulo }}</title>
</head>
<body>
    <h4>Esta pagina es {{ $titulo }} </h4>
    @if ($estado == 'activo')
        <h2>El sitio esta activo</h2>
    @else
        <h2>El sitio esta inactivo</h2>
    @endif
</body>
</html>
