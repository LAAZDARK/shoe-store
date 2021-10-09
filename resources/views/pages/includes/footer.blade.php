<footer class="footer-area">
    <div class="footer-top-area bg-img pt-105 pb-65"  data-overlay="9">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-3">
                    <div class="footer-widget mb-40">
                        <h3 class="footer-widget-title">Accesos</h3>
                        <div class="footer-widget-content">
                            <ul>
                                <li><a href="{{ route('login')}}">Iniciar sesión</a></li>
                                <li><a href="{{ route('page.register')}}">Registro</a></li>
                                <li><a href="{{ route('page.perfil')}}">Perfil</a></li>
                                <li><a href="#">Compras</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-3">
                    <div class="footer-widget mb-40">
                        <h3 class="footer-widget-title">Paginas</h3>
                        <div class="footer-widget-content">
                            <ul>
                                <li><a href="{{ route('page.store')}}">Productos</a></li>
                                <li><a href="{{ route('page.identity')}}">Identidad</a></li>
                                <li><a href="{{ route('page.contact')}}">Contacto</a></li>
                                <li><a href="{{ route('page.terms')}}">Terminos y condiciones</a></li>
                                <li><a href="{{ route('page.privacy')}}">Aviso de privacidad</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="footer-widget mb-40">
                        <h3 class="footer-widget-title">Contacto</h3>
                        <div class="footer-newsletter">
                            <p>Ingrese su correo para enviarle promociones y descuentos exclusivos.</p>
                            <div id="mc_embed_signup" class="subscribe-form pr-40">
                                <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll" class="mc-form">
                                        <input type="email" value="" name="EMAIL" class="email" placeholder="Ingrese su email" required>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                        <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                                    </div>
                                </form>
                            </div>
                            <div class="footer-contact">
                                <p><span><i class="ti-location-pin"></i></span> <a href="https://www.google.com/maps/place/Facultad+de+Estudios+Superiores+Cuautitl%C3%A1n/@19.6919881,-99.1905188,15z/data=!4m2!3m1!1s0x0:0x13d9c1b986e25ecc?sa=X&ved=2ahUKEwi9hIOerODwAhUFMawKHU3RBaIQ_BIwHnoECFUQBQ" target="_blank" rel="noopener noreferrer">Carr, Cuautitlán - Teoloyucan, San Sebastian Xhala, 54714 Cuautitlán Izcalli</a> </p>
                                <p><span><i class=" ti-headphone-alt "></i></span> <a href="tel:+525547113677"> 55 4711 3677</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom black-bg ptb-20">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="copyright">
                        <p>
                            Copyright &copy;
                            <a href="{{ route('home')}}">Shoe Store</a>
                            <script>document.write(new Date().getFullYear());</script>. Todos los derechos reservados.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
