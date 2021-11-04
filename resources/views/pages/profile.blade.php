@extends('pages.layouts.base')

@section('contenido')

<div class="register-area ptb-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-12 col-lg-6 col-xl-6 ml-auto mr-auto">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
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
                        <h3>Perfil</h3>
                        <div class="login-form">
                            <p><strong>Nombre: </strong>{{$user->name}}</p>
                            <p><strong>Correo electrónico: </strong>{{$user->email}}</p>
                            {{-- <p><strong>Edad: </strong>{{$user->name}}</p> --}}
                            <p><strong>RFC: </strong>{{$user->rfc}}</p>
                            <p><strong>Dirección: </strong>{{$user->address}}</p>
                            <p><strong>Genero: </strong>{{$user->gender}}</p>
                            <p><strong>Telefono: </strong>{{$user->phone}}</p>
                            <p><strong>Fecha de registro: </strong>{{$user->created_at}}</p>
                            <div class="d-flex justify-content-around">
                                <a class="btn btn-success" href="{{ route('page.perfil.show')}}">Actualizar</a>
                                <a class="btn btn-primary text-white" href="{{ route('page.billing.generate', $user->id)}}">Imprimir</a>
                            </div>
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
