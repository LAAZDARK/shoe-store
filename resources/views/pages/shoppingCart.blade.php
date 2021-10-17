@extends('pages.layouts.base')

@section('contenido')


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
                                    <th>Precio</th>
                                    <th>Talla</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="assets/img/cart/1.jpg" alt=""></a>
                                    </td>
                                    <td class="product-name"><a href="#">Botas </a></td>
                                    <td class="product-price-cart"><span class="amount">$165.00</span></td>
                                    <td class="product-quantity">
                                        <input value="1" type="number">
                                    </td>
                                    <td class="product-subtotal">$165.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                <h2>Total</h2>
                                <ul>
                                    <li>Subtotal<span>100.00</span></li>
                                    <li>Total<span>100.00</span></li>
                                </ul>
                                <a href="#">Pagar</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection

@push('js-script')
    {{-- <script src="{{asset('js/contact.js')}}"></script> --}}
@endpush
