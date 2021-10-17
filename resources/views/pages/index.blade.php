@extends('pages.layouts.base')

@section('contenido')

<div class="slider-area">
    <div class="slider-active owl-carousel">
        <div class="single-slider single-slider-book1 bg-img" style="background-image: url(assets/img/slider/home-1.jpg)">
            <div class="container">
                <div class="slider-animation slider-content-book fadeinup-animated">
                    <h1 class="animated"><span>Vive</span> la</h1>
                    <h2 class="animated">moda.</h2>
                    <p class="animated">Contamos con las mejores marcas de calzado para toda la familia.</p>
                    <a href="{{ route('page.store')}}">Tienda</a>
                </div>
            </div>
        </div>
        <div class="single-slider single-slider-book1 bg-img" style="background-image: url(assets/img/slider/home-2.jpg)">
            <div class="container">
                <div class="slider-animation slider-content-book fadeinup-animated">
                    <h1 class="animated"><span>Vive</span> la</h1>
                    <h2 class="animated">moda.</h2>
                    <p class="animated">Contamos con las mejores marcas de calzado para toda la familia.</p>
                    <a href="{{ route('page.store')}}">Tienda</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner area start -->
<div class="banner-area pt-120 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="book-banner-wrapper mr-20">
                    <img src="{{ asset('assets/img/slider/home-5.jpg')}}" width="500px" height="400px"alt="">
                    <div class="banner-book-style1">
                        <h3>Descuentos <br>Diciembre</h3>
                        <h2>50%</h2>
                        <a class="banner-book-style-btn" href="{{ route('page.store')}}">Mostrar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="book-banner-wrapper ml-20">
                    <img src="{{ asset('assets/img/slider/home-6.jpg')}}" width="500px" height="400px"alt="">
                    <div class="banner-book-style2 text-center">
                        {{-- <h2>Learn More </h2> --}}
                        {{-- <img src="assets/img/icon-img/2.png" alt=""> --}}
                        <p>Comodidad y diseño en uno.</p>
                        <a class="banner-book-style-btn" href="{{ route('page.store')}}">Mostrar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner area end -->
<!-- top  -->
<div class="top-month pb-120">
    <div class="container">
        <div class="section-title-3 text-center mb-70">
            <h2>Lo más vendido</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="writer-wrapper">
                    <img src="assets/img/slider/home-4.jpg" alt="">
                </div>
            </div>
            <div class="col-md-8">
                <div class="book-list-hover">
                    <div class="book-list-active owl-carousel">
                        <div class="product-wrapper">
                            <div class="product-img-2">
                                <a href="#">
                                    <img src="https://picsum.photos/325/350" alt="">
                                </a>
                                <div class="product-action-2">
                                    <a class="animate-left add-style-2" title="Agregar a carrito" href="#">Agregar a carrito <i class="ti-shopping-cart"></i></a>

                                </div>
                            </div>
                            <div class="product-content-3 text-center">
                                <h4><a href="#">Be like Me  (magazine)</a></h4>
                                {{-- <div class="product-rating-2">
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                </div> --}}
                            </div>
                        </div>
                        <div class="product-wrapper">
                            <div class="product-img-2">
                                <a href="#">

                                    <img src="https://picsum.photos/325/350" alt="">
                                </a>
                                <div class="product-action-2">
                                    <a class="animate-left add-style-2" title="Agregar a carrito" href="#">Agregar a carrito <i class="ti-shopping-cart"></i></a>

                                </div>
                            </div>
                            <div class="product-content-3 text-center">
                                <h4><a href="#">Sky Fall  (Book)</a></h4>

                            </div>
                        </div>
                        <div class="product-wrapper">
                            <div class="product-img-2">
                                <a href="#">

                                    <img src="https://picsum.photos/325/350" alt="">
                                </a>
                                <div class="product-action-2">
                                    <a class="animate-left add-style-2" title="Agregar a carrito" href="#">Agregar a carrito <i class="ti-shopping-cart"></i></a>

                                </div>
                            </div>
                            <div class="product-content-3 text-center">
                                <h4><a href="#">Tenis deportivos</a></h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- top  -->
<!-- blog area start -->
<div class="blog-area pt-120 pb-80">
    <div class="container">
        <div class="section-title-3 text-center mb-50">
            <h2>Recomendaciones de los expertos en moda</h2>
        </div>
        <div class="row">
            @foreach ($recommendations as $item)
                <div class="col-md-4">
                    <div class="blog-wrapper mb-40">
                        <div class="blog-img blog-hover">
                            <a href="{{ route('page.product.details', $item->id) }}"><img src="{{ asset($item->image)}}" width="300px" height="300px" alt=""></a>
                        </div>
                        <div class="blog-info">
                            <h4><a href="{{ route('page.product.details', $item->id) }}">{{$item->title}}</a></h4>
                            <span>{{$item->created_at}}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- blog area end -->
{{-- @include('Pages.chunks.banner-brand') --}}

@endsection

@push('js-script')
    {{-- <script src="{{asset('js/contact.js')}}"></script> --}}
@endpush
