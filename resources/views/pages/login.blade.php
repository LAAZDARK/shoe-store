@extends('pages.layouts.base')

@section('contenido')

<div class="register-area ptb-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-12 col-lg-6 col-xl-6 ml-auto mr-auto">
                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                        {{ session('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="login">
                    <div class="login-form-container">
                        <h1>Login</h1>
                        <div class="login-form">
                            <form action=" {{ route('auth.login')}} " method="post">
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
