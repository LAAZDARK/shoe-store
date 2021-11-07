<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Venta</title>
</head>
<body>
    <h3>Nueva venta realizada</h3> <br>
    <p><strong>Nombre:</strong> {{$sale->name}}</p>
    <p><strong>Correo:</strong> {{$sale->email}}</p>
    @if($sale->telephone)
        <p><strong>Telefono:</strong> {{$sale->telephone}}</p>
    @endif
    <p> <strong>RFC:</strong> {{$sale->rfc}}</p>
    <p> <strong>Dirección:</strong> {{$sale->address}}</p>
</body>
</html>
