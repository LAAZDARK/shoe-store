@extends('pages.layouts.base')

@section('contenido')

<div class="register-area ptb-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-12 col-lg-12 col-xl-6 ml-auto mr-auto">
                <div class="login">
                    <div class="login-form-container">
                        <h3>Actualizar datos</h3>
                        <div class="login-form">
                            <form action="{{ route('page.perfil.update')}}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$user->id}}">
                                <input type="text" name="name" value="{{$user->name}}" placeholder="Nombre" required>
                                <input type="email" name="email" value="{{$user->email}}" placeholder="Correo electrónico" required>
                                <input type="password" name="password" placeholder="Contraseña" required>
                                <input type="password" name="password_confirmation" placeholder="Confirmar contraseña" required>
                                <input name="phone" placeholder="Telefono" value="{{$user->phone}}" type="text">
                                <input type="text" name="rfc" placeholder="RFC" value="{{$user->rfc}}" required>
                                <input type="text" name="address" value="{{$user->address}}" placeholder="Dirección" required>
                                <div class="form-group col-md-4">
                                    <label for="gender">Genero</label>
                                    <select id="gender" name="gender" value="{{$user->gender}}" class="form-control form-control-sm">
                                        <option value="Hombre">Hombre</option>
                                        <option value="Mujer">Mujer</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                </div>
                                <div class="button-box">
                                    <button type="submit" class="default-btn floatright">Actualizar</button>
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
