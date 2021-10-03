@extends('pages.layouts.base')

@section('contenido')

<div class="register-area ptb-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-12 col-lg-6 col-xl-6 ml-auto mr-auto">
                <div class="login">
                    <div class="login-form-container">
                        <div class="login-form">
                            <p><strong>Nombre: </strong>{{$user->name}}</p>
                            <p><strong>Correo electrónico: </strong>{{$user->email}}</p>
                            {{-- <p><strong>Edad: </strong>{{$user->name}}</p> --}}
                            <p><strong>RFC: </strong>{{$user->rfc}}</p>
                            <p><strong>Dirección: </strong>{{$user->address}}</p>
                            <p><strong>Genero: </strong>{{$user->gender}}</p>
                            <p><strong>Telefono: </strong>{{$user->phone}}</p>
                            <p><strong>Fecha de registro: </strong>{{$user->created_at}}</p>
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
