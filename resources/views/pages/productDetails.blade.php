@extends('pages.layouts.base')

@section('contenido')



    <div class="product-details ptb-100 pb-90">
        <div class="container">

            <div class="row">
                <div class="col-md-12 col-lg-7 col-12">
                    <div class="product-details-img-content">
                        <img class="image-right"  width="400" height="400" src="{{ asset($product->image)}}" alt="">
                        {{-- <div class="product-details-tab mr-35 product-details-tab2">
                            <div class="product-details-large tab-content">
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-12 col-lg-5 col-12">
                    <div class="product-details-content">
                        <div id="shopping-cart">
                            <input type="hidden" ref="storeCard" value="{{route('purchase.store')}}">
                            <input type="hidden" ref="getCard" value="{{route('purchase.index')}}">
                        <form method="post" name="shoppingForm" v-on:submit.prevent="addCart">
                            @csrf
                            <h3>{{$product->title}}</h3>
                            <div class="details-price">
                                <span>${{$product->price}}</span>&nbsp;&nbsp;
                                @if ($product->status == 0)
                                    <strike class="text-danger">${{$product->price+120}}</strike>
                                @endif
                                <input type="hidden" ref="price" value="{{$product->price}}">
                            </div>
                            <p>{{ Str::limit($product->description, 100)}}</p>
                            <div class="quick-view-select">
                                <div class="select-option-part">
                                    <label>Tamaño*</label>
                                    <select class="select-product" ref="product_size" name="size">
                                        <option value="">- Seleccionar talla -</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                    </select>
                                </div>
                                {{-- <div class="select-option-part">
                                    <label>Color*</label>
                                    <select class="select">
                                        <option value="">- Seleccionar color -</option>
                                        <option value="">Cafe</option>
                                        <option value="">Negro</option>
                                        <option value="">Blanco</option>
                                    </select>
                                </div> --}}
                            </div>
                            @if (Auth::check())
                                <input type="hidden" ref="product_id" value="{{$product->id}}">
                                <input type="hidden" ref="product_name" value="{{$product->title}}">
                                {{-- <button class="btn-hover-black">Agregar</button> --}}
                                {{-- <a class="default-btn floatright" :href="addCart">Agregar a carrito</a> --}}
                                <button class="btn btn-outline-warning btn-lg btn-block">Agregar a carrito</button>
                            @else
                            <div class="quickview-plus-minus">
                                <div class="quickview-btn-cart">
                                    <a class="btn-hover-black" href="{{ route('login')}}"> Agregar a carrito</a>
                                </div>
                            </div>

                                {{-- <div class="quickview-plus-minus">
                                    <div class="quickview-btn-cart">

                                    </div>
                                </div> --}}
                            @endif

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
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-description-review-area">
        <div class="container">
            <div class="product-description-review text-center">
                <div class="description-review-title nav" role=tablist>
                    <a class="active" href="#pro-dec" data-toggle="tab" role="tab" aria-selected="true">
                        Descripción
                    </a>
                    <a href="#pro-review" data-toggle="tab" role="tab" aria-selected="false">
                        Opiniones de clientes
                    </a>
                    <a href="#pro-video" data-toggle="tab" role="tab" aria-selected="false">
                        Video
                    </a>
                    <a href="#pro-politica" data-toggle="tab" role="tab" aria-selected="false">
                        Política de Devoluciones
                    </a>
                </div>
                <div class="description-review-text tab-content">
                    <div class="tab-pane active show fade" id="pro-dec" role="tabpanel">
                        <p>{{$product->description}}</p>
                    </div>
                    <div class="tab-pane fade" id="pro-review" role="tabpanel">
                        <div class="single-testimonial-2 text-center mb-0">
                            <img src="assets/img/team/1.png" alt="">
                            <p>Calidad 100% , me encantan y siempre encuentro todo tipo de calzados, el trato de las dependientas espectacular , super amables.</p>
                            <img src="assets/img/team/2.png" alt="">
                            <h4>Carlos</h4>
                            <span>CEO Flexi</span>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pro-video" role="tabpanel">
                        <iframe width="853" height="480" src="https://www.youtube.com/embed/F1zfZsn8oT4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        {{-- <p>{{$product->description}}</p> --}}
                    </div>
                    <div class="tab-pane fade" id="pro-politica" role="tabpanel">
                        <ul>
                            <li>La devolución del producto procederá cuando el producto no exceda más de 30 días desde la confirmación de compra, así como cuando la devolución derive de situaciones convencionales.</li>
                            <li>El usuario deberá devolver el producto en sus condiciones originales, no sucio, sin manchas o rallas, sin muestras aparentes de uso, con su empaquetado, número de autorización de devolución (o guía).</li>
                            <li>Deberás de conservar la caja y el empaque original de los productos, ya que serán necesarios en caso de que se quiera realizar una devolución.</li>
                            <li>La empresa realizará una inspección física del producto para validar que el producto venga en las mismas condiciones en que se envió.</li>
                            <li>Si el producto no cumple con las condiciones mencionadas, la empresa no aceptará la devolución y el producto será devuelto al usuario, el usuario deberá cubrir los gastos de regreso si la devolución no procede.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                            <span>{{$item->category}}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
{{-- </div> --}}

@endsection

{{-- @push('js-lib')
    <script src="{{asset('assets/js/shopping-cart.js')}}"></script>
@endpush --}}
