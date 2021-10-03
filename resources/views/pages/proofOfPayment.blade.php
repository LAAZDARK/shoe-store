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
                background-color: #003566;
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


        <div id="body">

            <div id="section_header">
                {{-- <img src="{{config('app.name')}}" alt="{{config('app.name')}}" /> --}}
                {{-- <img src="{{ public_path('images/logoJobOffer.png') }}" style="width: 50px; height: 50px"> --}}
            </div>

            <div id="content">

                <div class="page" style="font-size: 7pt">

                    <table style="width: 100%; font-size: 10pt; margin: 20px;">


                        @if($user->id)
                        <tr>
                            <td>No. ticket: <strong>{{$user->id}}</strong></td>

                        </tr>
                        @endif
                        <tr>
                            <td>Frecuencia: <strong>Pago único</strong></td>

                        </tr>
                        <tr>
                            <td>Nombre: <strong> {{$user->name}}</strong></td>

                        </tr>
                        <tr>
                            <td>Email: <strong> {{ $user->email }} </strong></td>

                        </tr>

                        @if($user->phone)
                        <tr>
                            <td>Teléfono: <strong> {{ $user->phone}} </strong></td>

                        </tr>
                        @endif
                        @if($user->rfc)
                        <tr>
                            <td>RFC: <strong>{{$user->rfc}}</strong></td>

                        </tr>
                        @endif
                        @if($user->address)
                        <tr>
                            <td>Domicilio Fiscal: <strong>{{$user->address}}</strong></td>
                        </tr>
                        @endif

                        @if($user->methodOfPayment)
                        <tr>
                            <td>Metodo de pago: <strong>{{$user->methodOfPayment}}</strong></td>
                        </tr>
                        @endif

                        @if($user->total)
                        <tr>
                            <td>Total: <strong>{{$user->total}}</strong></td>
                        </tr>
                        @endif

                        <tr>
                            <td><h2>¡Muchas gracias por su compra!</h2></td>

                        </tr>

                    </table>

                </div>

            </div>


        </div>


    </body>
</html>
