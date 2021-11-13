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
                                <input type="text" name="title" placeholder="Titulo" required>
                                <textarea cols="20" rows="10" name="description" placeholder="Descripción completa del producto"></textarea>
                                <input type="text" name="price" placeholder="Precio" required>
                                <input name="brand" placeholder="Empresa" type="text">
                                <input type="text" name="model" placeholder="Modelo" required>
                                <input type="text" name="image" placeholder="Imagen" value="assets/img/product/" required>
                                <div class="form-group col-md-4">
                                    <label for="status">Estatus</label>
                                    <select id="status" name="status" class="form-control form-control-sm">
                                        <option value="1" selected>Activo</option>
                                        <option value="0">Inactivo</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="type">Tipo</label>
                                    <select id="type" name="type" class="form-control form-control-sm">
                                        <option value="Zapato" selected>Zapato</option>
                                        <option value="Tenis">Tenis</option>
                                        <option value="Bota">Bota</option>
                                        <option value="Botin">Botin</option>
                                        <option value="Chancla">Chancla</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="category">Categoria</label>
                                    <select id="category" name="category" class="form-control form-control-sm">
                                        <option value="Caballero" selected>Caballero</option>
                                        <option value="Dama">Dama</option>
                                        <option value="Niño">Niño</option>
                                        <option value="Niña">Niña</option>
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
