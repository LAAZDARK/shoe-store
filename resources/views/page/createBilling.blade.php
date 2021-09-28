<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }
  </style>
</head>

<body class="antialiased">
  <div class="container">
      <h1>Generar Factura</h1>

    <form action="{{ route('page.billing.create') }}" enctype="multipart/form-data" method="post" name="userForm">
      {{ csrf_field() }}
      <form>
        <div class="form-row">
            <span>ID usuario: </span> {{$user->id}}
            <input type="hidden" name="id" value="{{$user->id}}" class="form-control form-control-sm" id="name">
          <div class="form-group col-md-6">
            <label for="name">Nombre</label>
            <input type="text" name="name" value="{{$user->name}}" class="form-control form-control-sm" id="name">
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Correo electrónico</label>
            <input type="email" name="email" value="{{$user->email}}" class="form-control form-control-sm" id="inputEmail4">
          </div>
        </div>
        <div class="form-group col-md-6">
          <label for="inputAddress">Dirección</label>
          <input type="text" name="address" value="{{$user->address}}" class="form-control form-control-sm" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group col-md-6">
          <label for="inputAddress">Telefono</label>
          <input type="text" name="phone" value="{{$user->phone}}" class="form-control form-control-sm" id="inputAddress" placeholder="5547113677">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="rfc">RFC</label>
            <input type="text" name="rfc" value="{{$user->rfc}}" class="form-control form-control-sm" id="rfc">
          </div>
          <div class="form-group col-md-4">
            <label for="gender">Genero</label>
            <select id="gender" name="gender" value="{{$user->gender}}" class="form-control form-control-sm">
              <option>Hombre</option>
              <option>Mujer</option>
              <option>Otro</option>
            </select>
          </div>
        </div>
        <div class="form-group col-md-6">
            <label for="methodOfPayment">Forma de pago</label>
            <select type="text" name="methodOfPayment" class="form-control form-control-sm" id="methodOfPayment" >
                <option>Tarjeta de credito</option>
                <option>Tarjeta de debito</option>
                <option>Efectivo</option>
                <option>Transferencia</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="total">Total</label>
            <input type="text" name="total" class="form-control form-control-sm" id="total" placeholder="$5000">
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Acepta terminos y condiciones.
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
    </form>
  </div>
</body>

</html>
