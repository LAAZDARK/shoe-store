@extends('pages.layouts.base')

@section('contenido')

<div id="checkout">
{{-- Route --}}
<input type="hidden" ref="getCard" value="{{route('purchase.index')}}">
<input type="hidden" ref="countProduct" value="{{route('count.product')}}">
<input type="hidden" ref="sumProduct" value="{{route('sum.product')}}">
<input type="hidden" ref="getUser" value="{{route('user.index')}}">
<input type="hidden" ref="postPayment" value="{{route('pay.payment')}}">
{{-- Route --}}
<form method="post" name="formPay" action="{{ route('pay.payment') }}">
    @csrf
<div class="checkout-area ptb-100">
    <div class="container">
        <div class="row">
                {{-- <div> --}}
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="checkbox-form">
                            <h3>Detalles de facturación</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <p><strong>Nombre:</strong> @{{user.name}}</p>
                                    <p><strong>RFC:</strong> @{{user.rfc}}</p>
                                    <p><strong>Correo:</strong> @{{user.email}}</p>
                                    <p><strong>Dirección:</strong> @{{user.address}}</p>
                                </div>

                            </div>
                            <div class="different-address">
                                <div class="ship-different-title">
                                    <h3>
                                        <label>¿Agregar una dirección diferente?</label>
                                        <input id="ship-box" type="checkbox" />
                                    </h3>
                                </div>
                                <div id="ship-box-info" class="row">
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Nombre completo<span class="required">*</span></label>
                                            <input type="text" name="name" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Razon social</label>
                                            <input type="text" name="businessName" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>RFC <span class="required">*</span></label>
                                            <input type="text" name="rfc" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Dirección <span class="required">*</span></label>
                                            <input type="text" name="address" placeholder="Calle..." />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <input type="text" name="address1" placeholder="Departamento #21" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Ciudad <span class="required">*</span></label>
                                            <input type="text" name="city" placeholder="Ciudad de México" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Estado / Alcaldia <span class="required">*</span></label>
                                            <input type="text" name="state" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Codigo postal <span class="required">*</span></label>
                                            <input type="text" name=zipcode placeholder="Postcode / Zip" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Correo electrónico<span class="required">*</span></label>
                                            <input type="email" name="email"placeholder="user@mail.com" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Telefono <span class="required">*</span></label>
                                            <input type="text" name="phone" placeholder="5547113677" />
                                        </div>
                                    </div>
                                </div>
                                <div class="order-notes">
                                    <div class="checkout-form-list mrg-nn">
                                        <label>Comentarios de entrega</label>
                                        <textarea id="checkout-mess" cols="30" rows="10" name="comments"
                                            placeholder="Notas acerca de la entrega o producto"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="your-order">
                            <h3>Su orden</h3>
                            <div class="your-order-table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-name">Producto</th>
                                            <th class="product-total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="cart_item" v-for="product in cart">
                                            <td class="product-name">
                                                @{{product.title}}
                                            </td>
                                            <td class="product-total">
                                                <span class="amount">$@{{product.price}}.00</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th><strong>Subtotal</strong></th>
                                            <td><span class="amount">$@{{subtotal}}.00</span></td>
                                        </tr>
                                        <tr class="cart-subtotal">
                                            <th><strong>IVA</strong></th>
                                            <td><span class="amount">$@{{subtotal*.16 | formatNumber}}.00</span></td>
                                        </tr>
                                        <tr class="order-total">
                                            <th><strong>Total</strong></th>
                                            <td><strong><span class="amount">$@{{total | formatNumber}}.00</span></strong>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="payment-method">
                                <div class="payment-accordion">
                                    <div class="panel-group" id="faq">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h5 class="panel-title"><a data-toggle="collapse" aria-expanded="true"
                                                        data-parent="#faq" href="#payment-1">PayPal</a></h5>
                                            </div>
                                            <div id="payment-1" class="panel-collapse collapse show">
                                                <div class="panel-body">
                                                    <p>El pago se hara a traves de PayPal, por lo que el pedido no se enviará hasta que los fondos se hayan liquidado en nuestra cuenta.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <input type="hidden" name="total" v-model="total">
                                    </div>
                                    <div class="order-button-payment">
                                        <input type="submit" value="Realizar pago" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {{-- </div> --}}
            </div>
        </div>
    </div>
</form>
</div>


@endsection
