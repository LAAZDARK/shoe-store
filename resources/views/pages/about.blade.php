@extends('pages.layouts.base')

@section('contenido')


<div class="popular-product-area wrapper-padding-6 pt-75 pb-50 bg-img" style="background-image: url(assets/img/bg/13.jpg)">
    <div class="container-fluid">
        <div class="section-title-10 text-center">
            <h2>Historia</h2>
            <p>SHOE STORE es una empresa dinámica, joven pero con una gran experiencia en el mundo del calzado y 100% mexicana. Su fundador, Luis Zamorano, empezo en este sector en el año 2021. Su historia comenzó con una pequeña y humilde pagina web, con la marca Nike, que poco a poco se hizo un gran hueco en el sector del calzado, siendo hoy en día una de las empresas más importantes en este tipo de fabricación tanto en México como en el extranjero.</p>
        </div>
    </div>
</div>
<div class="popular-product-area wrapper-padding-6 pt-50 pb-70 bg-img" style="background-image: url(assets/img/bg/13.jpg)">
    <div class="container-fluid">
        <div class="section-title-10 text-center">
            <h2>LA DIFERENCIA SHOE STORE</h2>
            <p>ALTA TECNOLOGÍA PARA EL MÁXIMO CONFORT DE TUS PIES</p>
            <P>Somos expertos en calzado y más de ochenta años de permanencia ininterrumpida en el mercado nos avalan. Pero ¿por qué nos prefieren nuestros consumidores? Una de las razones podrás verla en el éste gráfico, que te muestra algunos atributos que son parte de la identidad de nuestro calzado.</P>
        </div>
    </div>
</div>
<div class="popular-product-area wrapper-padding-6 pt-50 pb-70 bg-img" style="background-image: url(assets/img/bg/13.jpg)">
    <div class="container-fluid">
        <div class="section-title-10 text-center">
            <h2>Nuestro equipo</h2>
            <p>Nuestro equipo son los bienes más importantes de la empresa. Ellos son la cara de la empresa y afectan directamente la experiencia y satisfacción del cliente. es por ello que contamos con programas de comunicación, además de considerar cada una de las opiniones de nuestros colaboradores en las decisiones de la empresa.</p>
        </div>
    </div>
</div>
<div class="services-area wrapper-padding-4 gray-bg pt-120 pb-80">
    <div class="container-fluid">
        {{-- <h2 class="text-center mb-50">Nuestro equipo</h2> --}}
        <div class="services-wrapper">
            <div class="single-services mb-40">
                <div class="services-img">
                    <img src="{{ asset('assets/img/team/juan.jpg')}}" width="100px" height="100px" alt="">
                </div>
                <div class="services-content">
                    <h4>Luis Zamorano</h4>
                    <p>Fundador y CEO</p>
                </div>
            </div>
            <div class="single-services mb-40">
                <div class="services-img">
                    <img src="{{ asset('assets/img/team/pedro.jpg')}}" width="100px" height="100px" alt="">
                </div>
                <div class="services-content">
                    <h4>Pedro</h4>
                    <p>Director de Finanzas </p>
                </div>
            </div>
            <div class="single-services mb-40">
                <div class="services-img">
                    <img src="{{ asset('assets/img/team/laura.jpeg')}}" width="100px" height="100px" alt="">
                </div>
                <div class="services-content">
                    <h4>Laura</h4>
                    <p>Marketing y ventas </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="services-area wrapper-padding-4 gray-bg pt-120 pb-80">
    <div class="container-fluid">
        {{-- <h2 class="text-center mb-50">Nuestro equipo</h2> --}}
        <div class="services-wrapper">
            <div class="single-services mb-40">
                <div class="services-img">
                    <img src="{{ asset('assets/img/team/julian.png')}}" width="100px" height="100px" alt="">
                </div>
                <div class="services-content">
                    <h4>Julian</h4>
                    <p>Desarrollador</p>
                </div>
            </div>
            <div class="single-services mb-40">
                <div class="services-img">
                    <img src="{{ asset('assets/img/team/juan.jpg')}}" width="100px" height="100px" alt="">
                </div>
                <div class="services-content">
                    <h4>Juan</h4>
                    <p>Desarrollador</p>
                </div>
            </div>
            <div class="single-services mb-40">
                <div class="services-img">
                    <img src="{{ asset('assets/img/team/andrea.png')}}" width="100px" height="100px" alt="">
                </div>
                <div class="services-content">
                    <h4>Andrea</h4>
                    <p>Diseño</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- testimonials area start -->
<div class="testimonials-area pt-100 pb-95 bg-img" style="background-image: url(assets/img/bg/7.jpg)">
    <div class="container">
        <div class="testimonials-active owl-carousel">
            <div class="single-testimonial-2 text-center">
                <img src="assets/img/team/1.png" alt="">
                <p>Llevo comprando zapatos en Shoe Store hace muchos años, son de calidad y aparte tiene muy buenos diseños, son la primera pagina que recomiendo a mis modelos.</p>
                <img src="assets/img/team/2.png" alt="">
                <h4>Carolina Marchena</h4>
                <span>Diseñadora de moda</span>
            </div>
            <div class="single-testimonial-2 text-center">
                <img src="assets/img/team/1.png" alt="">
                <p>Calidad 100% , me encantan y siempre encuentro todo tipo de calzados, el trato de las dependientas espectacular , super amables.</p>
                <img src="assets/img/team/2.png" alt="">
                <h4>Carlos</h4>
                <span>CEO Flexi</span>
            </div>
            <div class="single-testimonial-2 text-center">
                <img src="assets/img/team/1.png" alt="">
                <p>Calzado para pequeños y mayores a buen precio y calidad, si no tienen el número te lo intentan localizar, estando casi siempre en 24 horas disponible.</p>
                <img src="assets/img/team/2.png" alt="">
                <h4>Bill Gates</h4>
                <span>Fundador Microsoft</span>
            </div>
            <div class="single-testimonial-2 text-center">
                <img src="assets/img/team/1.png" alt="">
                <p>Me encanta. Es mi zapateria de confianza desde que empezaron en Bami. En precio y calidad son estupendos y la atención lo mismo..</p>
                <img src="assets/img/team/2.png" alt="">
                <h4>Mark Zuckerberg</h4>
                <span>Fundador Facebook</span>
            </div>
            <div class="single-testimonial-2 text-center">
                <img src="assets/img/team/1.png" alt="">
                <p>Shoe Store la tienda que surte calzado a todos mis empleados.</p>
                <img src="assets/img/team/2.png" alt="">
                <h4>Carlos Slim</h4>
                <span>Empresario Mexicano</span>
            </div>
        </div>
    </div>
</div>
<!-- testimonials area end -->

@endsection
