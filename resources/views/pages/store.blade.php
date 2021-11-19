@extends('pages.layouts.base')

@section('contenido')

<div class="product-style-area pt-50">
    <div class="coustom-container-fluid">
        <div id="search">
            <input type="hidden" ref="getProduct" value="{{ route('list.product')}}">
            <div class="row">
                <div class="col-md-12 col-12 col-lg-6 col-xl-6 ml-auto mr-auto mb-40">

                    <input type="text" v-model="search" @keyup.page-down="searchData" placeholder="Bucar producto">

                </div>
            </div>
            <div v-if="!active">
                <div class="container">
                    <div class="row justify-content-center ">
                        <div class="col-xs-6">
                            <div class="table table-striped">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Imagen</th>
                                            <th>Nombre</th>
                                            <th>Marca</th>
                                            <th>Genero</th>
                                            <th>Tipo</th>
                                            <th>Precio</th>
                                            {{-- <th>Opciones</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="item in searchData">
                                            <td class="product-thumbnail">
                                                <a :href="item.url"><img :src="item.image"  width="50" height="60" alt=""></a>
                                            </td>
                                            <td class="product-name"><a :href="item.url">@{{item.title}} </a></td>
                                            <td class="product-name"><a :href="item.url">@{{item.brand}}</a></td>
                                            <td class="product-name"><a :href="item.url">@{{item.category}} </a></td>
                                            <td class="product-name"><a :href="item.url">@{{item.type}} </a></td>
                                            <td class="product-price-cart"><span class="amount">$@{{item.price}}.00</span></td>
                                            {{-- <td><button class="btn btn-danger btn-sm" v-on:click.prevent="deleteProduct(product.id)">Eliminar</button></td> --}}
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div v-if="active">
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
                                                    {{-- <a class="animate-top" title="Agregar a carrito" href="#">
                                                        <i class="pe-7s-cart"></i>
                                                    </a> --}}
                                                    <a class="animate-right" title="Detalles" href="{{ route('page.product.details', $item->id) }}">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="funiture-product-content text-center">
                                                <h4><a href="{{ route('page.product.details', $item->id) }}">{{$item->title}}</a></h4>
                                                <span>${{$item->price}}</span>&nbsp;&nbsp;
                                                @if ($item->status == 0)
                                                    <strike class="text-danger">${{$item->price+120}}</strike>
                                                @endif
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
                                                    {{-- <a class="animate-top" title="Agregar a carrito" href="#">
                                                        <i class="pe-7s-cart"></i>
                                                    </a> --}}
                                                    <a class="animate-right" title="Detalles" href="{{ route('page.product.details', $item->id) }}">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="funiture-product-content text-center">
                                                <h4><a href="{{ route('page.product.details', $item->id) }}">{{$item->title}}</a></h4>
                                                <span>${{$item->price}}</span>&nbsp;&nbsp;
                                                @if ($item->status == 0)
                                                    <strike class="text-danger">${{$item->price+120}}</strike>
                                                @endif
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
                                                    {{-- <a class="animate-top" title="Agregar a carrito" href="#">
                                                        <i class="pe-7s-cart"></i>
                                                    </a> --}}
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
                                                    {{-- <a class="animate-top" title="Agregar a carrito" href="#">
                                                        <i class="pe-7s-cart"></i>
                                                    </a> --}}
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
    </div>
</div>

@endsection

@push('js-script')
    <script src="{{asset('assets/js/search.js')}}"></script>
@endpush
