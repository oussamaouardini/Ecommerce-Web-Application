@extends('layouts.nav');
@section('content')
    <div class="cart-main-area section-padding--lg bg--white">
        <div class="container" style="margin-top: 30px;">
            <div class="row">
                <div class="col-md-12 col-sm-12 ol-lg-12">
                    <form action="#">
                        <div class="table-content wnro__table table-responsive">
                            <table>
                                <thead>
                                <tr class="title-top">
                                    <th class="product-thumbnail">Image</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="product-thumbnail"><a href="#"><img src="{{asset('css/cardandCheckout/images/p1.jpg')}}" alt="product img"></a></td>
                                    <td class="product-name"><a href="#">Natoque penatibus</a></td>
                                    <td class="product-price"><span class="amount">$165.00</span></td>
                                    <td class="product-quantity"><input type="number" value="1"></td>
                                    <td class="product-subtotal">$165.00</td>
                                    <td class="product-remove"><a href="#">X</a></td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail"><a href="#"><img src="{{asset('css/cardandCheckout/images/p1.jpg')}}" alt="product img"></a></td>
                                    <td class="product-name"><a href="#">Quisque fringilla</a></td>
                                    <td class="product-price"><span class="amount">$50.00</span></td>
                                    <td class="product-quantity"><input type="number" value="1"></td>
                                    <td class="product-subtotal">$50.00</td>
                                    <td class="product-remove"><a href="#">X</a></td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail"><a href="#"><img src="{{asset('css/cardandCheckout/images/p1.jpg')}}" alt="product img"></a></td>
                                    <td class="product-name"><a href="#">Vestibulum suscipit</a></td>
                                    <td class="product-price"><span class="amount">$50.00</span></td>
                                    <td class="product-quantity"><input type="number" value="1"></td>
                                    <td class="product-subtotal">$50.00</td>
                                    <td class="product-remove"><a href="#">X</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                    <div class="cartbox__btn">
                        <ul class="cart__btn__list d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
                            <li><div id = "checkoutCont"><a id = "checkout" href="/checkout">Check Out</a></div></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="cartbox__total__area" style="padding-bottom: 20px;">
                        <div class="cartbox-total d-flex justify-content-between">
                            <ul class="cart__total__list">
                                <li>Cart total</li>
                                <li>Sub Total</li>
                            </ul>
                            <ul class="cart__total__tk">
                                <li>$70</li>
                                <li>$70</li>
                            </ul>
                        </div>
                        <div class="cart__total__amount">
                            <span>Grand Total</span>
                            <span>$140</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
