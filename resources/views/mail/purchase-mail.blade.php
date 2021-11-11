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
    @foreach ($sales as $sale)


    <p><strong>Nombre:</strong> {{$sale->name}}</p>
    <p><strong>Correo:</strong> {{$sale->email}}</p>
    @if($sale->telephone)
        <p><strong>Telefono:</strong> {{$sale->telephone}}</p>
    @endif
    <p> <strong>RFC:</strong> {{$sale->rfc}}</p>
    <p> <strong>Dirección:</strong> {{$sale->address}}</p>
    @if($sale->comments)
        <p><strong>Comentarios:</strong> {{$sale->comments}}</p>
    @endif
    <p> <strong>Metodo de pago:</strong>Tarjeta de debito</p>
    <table style="width: 100%; font-size: 14pt; margin: 10px;">
        <tr>
            <td><strong>Nombre</strong></td>
            <td><strong>Unidad</strong></td>
            <td><strong>Precio</strong></td>
        </tr>

        @if($sale->purchases)

            @foreach($sale->purchases as $item)
            <tr>
                <td>{{$item->productName}}</td>
                <td>1</td>
                <td>{{$item->price}}</td>
            </tr>
            @endforeach

        @endif
        @if($sale->total)
        <tr>
            <td></td>
            <td style="text-align: right;">Total: </td>
            <td><strong>{{$sale->total}}</strong></td>
        </tr>
        @endif
    @endforeach
    </table>
</body>
</html>
