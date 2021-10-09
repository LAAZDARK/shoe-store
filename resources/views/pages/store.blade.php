@extends('pages.layouts.base')

@section('contenido')

<div class="product-style-area pt-50">
    <div class="coustom-container-fluid">

        <div class="product-tab-list text-center mb-65 nav" role="tablist">
            <a class="active" href="#furniture1" data-toggle="tab" role="tab">
                <h4>Dama </h4>
            </a>
            <a href="#furniture2" data-toggle="tab" role="tab">
                <h4>Caballero </h4>
            </a>
            <a href="#furniture3" data-toggle="tab" role="tab">
                <h4>Niños </h4>
            </a>
        </div>
        <div class="tab-content">
            <div class="tab-pane active show fade" id="furniture1" role="tabpanel">
                <div class="coustom-row-5">
                    {{-- Product --}}
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="https://picsum.photos/360/360" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-top" title="Agregar a carrito" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Detalles" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="#">Sofa Chaise Sleeper</a></h4>
                                <span>$90.00</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="tab-pane fade" id="furniture2" role="tabpanel">
                <div class="coustom-row-5">
                    {{-- Product --}}
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="https://picsum.photos/360/360" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-top" title="Agregar a carrito" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Detalles" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="#">Seafront Accent Chair</a></h4>
                                <span>$90.00</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="tab-pane fade" id="furniture3" role="tabpanel">
                <div class="coustom-row-5">
                    {{-- Product --}}
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="https://picsum.photos/360/360" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-top" title="Agregar a carrito" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Detalles" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="#">Trucker Accent Chair</a></h4>
                                <span>$90.00</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
