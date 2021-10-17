@extends('pages.layouts.base')

@section('contenido')


<div class="product-details ptb-100 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-7 col-12">
                <div class="product-details-img-content">
                    <div class="product-details-tab mr-35 product-details-tab2">
                        <div class="product-details-large tab-content">
                            <img src="{{ asset($product->image)}}" width="500px" height="500px" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-5 col-12">
                <div class="product-details-content">
                    <h3>{{$product->title}}</h3>
                    <div class="details-price">
                        <span>${{$product->price}}</span>
                    </div>
                    <p>{{$product->description}}</p>
                    <div class="quick-view-select">
                        <div class="select-option-part">
                            <label>Tamaño*</label>
                            <select class="select">
                                <option value="">- Seleccionar talla -</option>
                                <option value="">xl</option>
                                <option value="">ml</option>
                                <option value="">m</option>
                                <option value="">sl</option>
                            </select>
                        </div>
                        <div class="select-option-part">
                            <label>Color*</label>
                            <select class="select">
                                <option value="">- Seleccionar color -</option>
                                <option value="">Cafe</option>
                                <option value="">Negro</option>
                                <option value="">Blanco</option>
                            </select>
                        </div>
                    </div>
                    <div class="quickview-plus-minus">
                        <div class="quickview-btn-cart">
                            <a class="btn-hover-black" href="#">Agregar a carrito</a>
                        </div>
                    </div>
                    <div class="product-details-cati-tag mt-35">
                        <ul>
                            <li class="categories-title">Categoria :</li>
                            <li><a href="#">{{$product->category}}</a></li>
                        </ul>
                    </div>
                    <div class="product-details-cati-tag mtb-10">
                        <ul>
                            <li class="categories-title">Tipo :</li>
                            <li><a href="#">{{$product->type}}</a></li>
                        </ul>
                    </div>
                    <div class="product-share">
                        <ul>
                            <li class="categories-title">Compartir :</li>
                            <li>
                                <a target="_blank" href="https://www.facebook.com/">
                                    <i class="icofont icofont-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://twitter.com/?lang=es">
                                    <i class="icofont icofont-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.pinterest.com.mx/">
                                    <i class="icofont icofont-social-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-description-review-area pb-90">
    <div class="container">
        <div class="product-description-review text-center">
            <div class="description-review-title nav" role=tablist>
                <a class="active" href="#pro-dec" data-toggle="tab" role="tab" aria-selected="true">
                    Descripción
                </a>
                <a href="#pro-review" data-toggle="tab" role="tab" aria-selected="false">
                    Opiniones de clientes
                </a>
            </div>
            <div class="description-review-text tab-content">
                <div class="tab-pane active show fade" id="pro-dec" role="tabpanel">
                    <p>{{$product->description}}</p>
                </div>
                <div class="tab-pane fade" id="pro-review" role="tabpanel">
                    <a href="#">Escribe tu primer comentario!</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product area start -->
<div class="product-area pb-95">
    <div class="container">
        <div class="section-title-3 text-center mb-50">
            <h2>Otras personas también compraron</h2>
        </div>
        <div class="product-style">
            <div class="related-product-active owl-carousel">
                {{-- <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="assets/img/product/fashion-colorful/1.jpg" alt="">
                        </a>
                        <span>hot</span>
                        <div class="product-action">
                            <a class="animate-left" title="Wishlist" href="#">
                                <i class="pe-7s-like"></i>
                            </a>
                            <a class="animate-top" title="Add To Cart" href="#">
                                <i class="pe-7s-cart"></i>
                            </a>
                            <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                <i class="pe-7s-look"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h4><a href="#">Arifo Stylas Dress</a></h4>
                        <span>$115.00</span>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>


@endsection
