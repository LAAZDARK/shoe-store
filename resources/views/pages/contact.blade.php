@extends('pages.layouts.base')

@section('contenido')

<div class="contact-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
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
                                            <input name="name" v-model="form.name" autocomplete="off" required="" type="text">
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
                                            <input name="telephone" v-model="form.telephone" autocomplete="off" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-input-style mb-30">
                                            <label>Asunto*</label>
                                            <input name="subject" v-model="form.subject" autocomplete="off" required="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-textarea-style mb-30">
                                            <label>Mensaje*</label>
                                            <textarea class="form-control2" autocomplete="off" name="message" v-model="form.message" required=""></textarea>
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
            <div class="col-lg-5">
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
                                <p><span>Dirección</span> <a href="https://www.google.com/maps/place/Facultad+de+Estudios+Superiores+Cuautitl%C3%A1n/@19.6919881,-99.1905188,15z/data=!4m2!3m1!1s0x0:0x13d9c1b986e25ecc?sa=X&ved=2ahUKEwi9hIOerODwAhUFMawKHU3RBaIQ_BIwHnoECFUQBQ" target="_blank" rel="noopener noreferrer">Carr, Cuautitlán - Teoloyucan, San Sebastian Xhala, 54714 Cuautitlán Izcalli</a> </p>
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15025.937842605554!2d-99.1905188!3d19.6919881!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x13d9c1b986e25ecc!2sFacultad%20de%20Estudios%20Superiores%20Cuautitl%C3%A1n!5e0!3m2!1ses-419!2smx!4v1636691552642!5m2!1ses-419!2smx" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js-script')
    <script src="{{asset('assets/js/contact.js')}}"></script>
@endpush
