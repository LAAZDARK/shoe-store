@extends('pages.layouts.base')

@section('contenido')

<div class="register-area ptb-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-12 col-lg-6 col-xl-6 ml-auto mr-auto">
                <div class="login">
                    <div class="login-form-container">
                        <div class="login-form">
                            <form action=" {{ route('login')}} " method="post">
                                @csrf
                                <input type="text" name="email" placeholder="Coreo electrónico">
                                <input type="password" name="password" placeholder="Contraseña">
                                <div class="button-box">
                                    <div class="login-toggle-btn">
                                        <a href="#">¿Recuperar contraseña?</a>
                                    </div>
                                    <button type="submit" class="default-btn floatright">Iniciar sesión</button>
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
