@extends('pages.layouts.base')

@section('contenido')

<div class="product-style-area pt-50">
    <div class="coustom-container-fluid">

        <div class="product-tab-list text-center mb-65 nav" role="tablist">
            <a class="active" href="#Dama" data-toggle="tab" role="tab">
                <h4>Dama </h4>
            </a>
            <a href="#Caballero" data-toggle="tab" role="tab">
                <h4>Caballero </h4>
            </a>
            <a href="#Niño" data-toggle="tab" role="tab">
                <h4>Niño </h4>
            </a>
            <a href="#Niña" data-toggle="tab" role="tab">
                <h4>Niña </h4>
            </a>
        </div>
        {{-- {{$products}} --}}
        <div class="tab-content">
            <div class="tab-pane active show fade" id="Dama" role="tabpanel">
                <div class="coustom-row-5">
                    {{-- Product --}}

                    @foreach ($products as $item)
                        @if ($item->category == 'Dama')
                            <div class="custom-col-three-5 custom-col-style-5 mb-65">
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="{{ route('page.product.details', $item->id) }}">
                                            <img src="{{ asset($item->image)}}" alt="">
                                        </a>
                                        <div class="product-action">
                                            <a class="animate-top" title="Agregar a carrito" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-right" title="Detalles" href="{{ route('page.product.details', $item->id) }}">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="funiture-product-content text-center">
                                        <h4><a href="{{ route('page.product.details', $item->id) }}">{{$item->title}}</a></h4>
                                        <span>${{$item->price}}</span>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach


                </div>
            </div>
            <div class="tab-pane fade" id="Caballero" role="tabpanel">
                <div class="coustom-row-5">
                    {{-- Product --}}
                    @foreach ($products as $item)
                        @if ($item->category == 'Caballero')
                            <div class="custom-col-three-5 custom-col-style-5 mb-65">
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="{{ route('page.product.details', $item->id) }}">
                                            <img src="{{ asset($item->image)}}" alt="">
                                        </a>
                                        <div class="product-action">
                                            <a class="animate-top" title="Agregar a carrito" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-right" title="Detalles" href="{{ route('page.product.details', $item->id) }}">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="funiture-product-content text-center">
                                        <h4><a href="{{ route('page.product.details', $item->id) }}">{{$item->title}}</a></h4>
                                        <span>${{$item->price}}</span>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
            <div class="tab-pane fade" id="Niño" role="tabpanel">
                <div class="coustom-row-5">
                    {{-- Product --}}
                    @foreach ($products as $item)
                        @if ($item->category == 'Niño')
                            <div class="custom-col-three-5 custom-col-style-5 mb-65">
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="{{ route('page.product.details', $item->id) }}">
                                            <img src="{{ asset($item->image)}}" alt="">
                                        </a>
                                        <div class="product-action">
                                            <a class="animate-top" title="Agregar a carrito" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-right" title="Detalles" href="{{ route('page.product.details', $item->id) }}">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="funiture-product-content text-center">
                                        <h4><a href="{{ route('page.product.details', $item->id) }}">{{$item->title}}</a></h4>
                                        <span>${{$item->price}}</span>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>

            <div class="tab-pane fade" id="Niña" role="tabpanel">
                <div class="coustom-row-5">
                    {{-- Product --}}
                    @foreach ($products as $item)
                        @if ($item->category == 'Niña')
                            <div class="custom-col-three-5 custom-col-style-5 mb-65">
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="{{ route('page.product.details', $item->id) }}">
                                            <img src="{{ asset($item->image)}}" alt="">
                                        </a>
                                        <div class="product-action">
                                            <a class="animate-top" title="Agregar a carrito" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-right" title="Detalles" href="{{ route('page.product.details', $item->id) }}">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="funiture-product-content text-center">
                                        <h4><a href="{{ route('page.product.details', $item->id) }}">{{$item->title}}</a></h4>
                                        <span>${{$item->price}}</span>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
