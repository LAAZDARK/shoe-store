@extends('pages.layouts.base')

@section('contenido')

<div class="contact-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div id="contact">
                    <input type="hidden" ref="storeContact" value="{{ route('contact.store') }}">
                    <div class="contact-map-wrapper">
                        <div class="contact-message">
                            <div class="contact-title">
                                <h4>Información de contacto</h4>
                            </div>
                            <div v-if="send">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>@{{send}}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                            <form class="contact-form" method="POST"  v-on:submit.prevent="store">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="contact-input-style mb-30">
                                            <label>Nombre*</label>
                                            <input name="name" v-model="form.name" required="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-input-style mb-30">
                                            <label>Correo electrónico*</label>
                                            <input name="email" v-model="form.email" required="" type="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-input-style mb-30">
                                            <label>Telefono</label>
                                            <input name="telephone" v-model="form.telephone" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-input-style mb-30">
                                            <label>Asunto*</label>
                                            <input name="subject" v-model="form.subject" required="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-textarea-style mb-30">
                                            <label>Mensaje*</label>
                                            <textarea class="form-control2" name="message" v-model="form.message" required=""></textarea>
                                        </div>
                                        <button class="submit contact-btn btn-hover" type="submit">
                                            Enviar mensaje
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-info-wrapper">
                    <div class="contact-title">
                        <h4>Visitanos</h4>
                    </div>
                    <div class="contact-info">
                        <div class="single-contact-info">
                            <div class="contact-info-icon">
                                <i class="ti-location-pin"></i>
                            </div>
                            <div class="contact-info-text">
                                <p><span>Dirección:</span>  Carr, Cuautitlán - Teoloyucan, San Sebastian Xhala, 54714 Cuautitlán Izcalli</p>
                            </div>
                        </div>
                        <div class="single-contact-info">
                            <div class="contact-info-icon">
                                <i class="pe-7s-mail"></i>
                            </div>
                            <div class="contact-info-text">
                                <p><span>Correo electrónico: </span> support@shoestore.com</p>
                            </div>
                        </div>
                        <div class="single-contact-info">
                            <div class="contact-info-icon">
                                <i class="pe-7s-call"></i>
                            </div>
                            <div class="contact-info-text">
                                <p><span>Telefono: </span>+52 55 471 136 77</p>
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
    <script src="{{asset('assets/js/contact.js')}}"></script>
@endpush
