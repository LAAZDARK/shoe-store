@extends('pages.layouts.base')

@section('contenido')

<div id="cart-dashboard">
    {{-- Route --}}
    <input type="hidden" ref="storeCard" value="{{route('purchase.store')}}">
    <input type="hidden" ref="getCard" value="{{route('purchase.index')}}">
    <input type="hidden" ref="countProduct" value="{{route('count.product')}}">
    <input type="hidden" ref="sumProduct" value="{{route('sum.product')}}">
    {{-- End Route --}}
    <div class="cart-main-area pt-95 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 class="cart-heading">Carrito de compras</h1>
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Imagen</th>
                                        <th>Nombre</th>
                                        <th>Marca</th>
                                        <th>Genero</th>
                                        <th>Tipo</th>
                                        <th>Precio</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="product in cart">
                                        <td class="product-thumbnail">
                                            <a href="#"><img :src="'/' + product.image"  width="50" height="60" alt=""></a>
                                        </td>
                                        <td class="product-name"><a href="#">@{{product.title}} </a></td>
                                        <td class="product-name"><a href="#">@{{product.brand}}</a></td>
                                        <td class="product-name"><a href="#">@{{product.category}} </a></td>
                                        <td class="product-name"><a href="#">@{{product.type}} </a></td>
                                        <td class="product-price-cart"><span class="amount">$@{{product.price}}.00</span>
                                            {{-- <span v-if="product.status === '0'">
                                                <span>$@{{product.price}}</span>
                                            </span> --}}
                                        </td>
                                        <td><button class="btn btn-danger btn-sm" v-on:click.prevent="deleteProduct(product.id)">Eliminar</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-5 ml-auto">
                                <div class="cart-page-total">
                                    <h2>Total</h2>
                                    <ul>
                                        <li>Subtotal<span>$@{{total}}.00</span></li>
                                        <li>IVA<span>$@{{total*.16 | formatNumber}}.00</span></li>
                                        <li>Total<span>$@{{total*1.16 | formatNumber}}.00</span></li>
                                    </ul>
                                    <a href="{{ route('pay.checkout')}}">Pagar</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@push('js-script')
    {{-- <script src="{{asset('js/contact.js')}}"></script> --}}
@endpush
