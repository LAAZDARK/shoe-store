@extends('pages.layouts.base')

@section('contenido')

<div class="register-area ptb-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-12 col-lg-12 col-xl-6 ml-auto mr-auto">
                <div class="login">
                    <div class="login-form-container">
                        <h3>Registro de productos</h3>
                        <div class="login-form">
                            <form action="{{ route('store.product')}}" method="post">
                                @csrf
                                <input type="text" name="name" placeholder="Nombre" required>
                                <input type="text" name="email" placeholder="Correo electrónico" required>
                                <input type="text" name="password" placeholder="Contraseña" required>
                                <input type="text" name="password_confirmation" placeholder="Confirmar contraseña" required>
                                <input name="phone" placeholder="Telefono" type="text">
                                <input type="text" name="rfc" placeholder="RFC" required>
                                <input type="text" name="address" placeholder="Dirección" required>
                                <div class="form-group col-md-4">
                                    <label for="gender">Genero</label>
                                    <select id="gender" name="gender" class="form-control form-control-sm">
                                        <option value="Hombre" selected>Hombre</option>
                                        <option value="Mujer">Mujer</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                </div>
                                <div class="button-box">
                                    <button type="submit" class="default-btn floatright">Registrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js-script')
    {{-- <script src="{{asset('js/contact.js')}}"></script> --}}
@endpush
