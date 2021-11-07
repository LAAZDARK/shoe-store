<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
    <head>
        <style>

            body {
                margin: 3cm 2cm 2cm;
            }

            header {
                position: fixed;
                top: 0cm;
                left: 0cm;
                right: 0cm;
                height: 2cm;
                background-color: #ccc916;
                color: white;
                text-align: center;
                line-height: 30px;
            }

            footer {
                position: fixed;
                bottom: 0cm;
                left: 0cm;
                right: 0cm;
                height: 2cm;
                background-color: #003566;
                color: white;
                text-align: center;
                line-height: 35px;
            }
        </style>

    </head>

    <body>
        <header>
            <h1>Shoe Store</h1>
        </header>


        {{-- <div> --}}

            {{-- <div > --}}

                <div class="page" style="font-size: 7pt">
                    {{-- {{$billings->name}} --}}

                    <table style="width: 100%; font-size: 10pt; margin: 20px;">


                        @foreach ($billings as $billing)
                            {{-- {{$billing}} --}}
                            @if($billing->id)
                                <tr>
                                    <td>No. ticket: <strong>{{$billing->id}}</strong></td>
                                </tr>
                            @endif
                            <tr>
                                <td>Frecuencia: <strong>Pago único</strong></td>

                            </tr>
                            @if($billing->name)
                            <tr>
                                <td>Nombre: <strong> {{$billing->name}}</strong></td>

                            </tr>
                            @endif
                            @if($billing->email)
                            <tr>
                                <td>Email: <strong> {{ $billing->email }} </strong></td>

                            </tr>
                            @endif
                            @if($billing->phone)
                            <tr>
                                <td>Teléfono: <strong> {{ $billing->phone}} </strong></td>

                            </tr>
                            @endif
                            @if($billing->rfc)
                            <tr>
                                <td>RFC: <strong>{{$billing->rfc}}</strong></td>

                            </tr>
                            @endif
                            @if($billing->address)
                            <tr>
                                <td>Domicilio Fiscal: <strong>{{$billing->address}}</strong></td>
                            </tr>
                            @endif

                            {{-- @if($billing->methodOfPayment) --}}
                            <tr>
                                <td>Metodo de pago: <strong>Tarjeta de debito</strong></td>
                            </tr>
                            {{-- @endif --}}

                            @if($billing->total)
                            <tr>
                                <td>Total: <strong>{{$billing->total}}</strong></td>
                            </tr>
                            @endif
                            @if($billing->purchases)
                                @foreach($billing->purchases as $item)
                                    <td>Producto: <strong>{{$item->productName}}</strong></td>
                                    <td>Precio: <strong>{{$item->price}}</strong></td>
                                @endforeach
                            @endif
                        @endforeach

                        {{-- @if($billing->id)
                        <tr>
                            <td>No. ticket: <strong>{{$billing->id}}</strong></td>

                        </tr>
                        @endif
                         --}}

                        {{-- <tr>
                            <td><h2>¡Muchas gracias por su compra!</h2></td>

                        </tr> --}}

                    </table>

                </div>

            {{-- </div>


        </div> --}}


    </body>
</html>
