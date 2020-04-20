@extends('layouts.nav');
@section('content')
<div class="cart-main-area section-padding--lg bg--white">
    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class="col-md-12 col-sm-12 ol-lg-12">
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
                            @isset($cartItems)
                            @php
                            $i = 1;
                            $j = 0;
                            @endphp
                            @foreach($cartItems as $cartItem)
                            <tr>
                                <td class="product-thumbnail"><a href="#">
                                        <img src="{{asset("productImages/$images[$j]")}}" alt="product img"></a>
                                </td>
                                <td class="product-name"><a href="#">{{$cartItem['product']->title}}</a></td>
                                <td class="product-price"><span class="amount" id="price-{{$cartItem['product']->id}}">$
                                        {{$cartItem['product']->price}}
                                    </span></td>
                                <td class="product-quantity"><input id="quantity-{{$cartItem['product']->id}}"
                                        type="text" value={{ (int)$cartItem['quantity'] }}>
                                    <i id="plus" class="fa fa-plus-circle"
                                        onclick="add({{$cartItem['product']->id}})"></i>
                                    <i id="minus" class="fa fa-minus-circle"
                                        onclick="subs({{$cartItem['product']->id}})"></i></td>
                                <td class="product-subtotal" id="total-{{$cartItem['product']->id}}">
                                    $ <span
                                        class="sbtotal">{{(int)$cartItem['quantity']*(double)$cartItem['product']->price}}</span>
                                </td>

                                <td class="product-remove">
                                    <form action="{{url('creditCard/remove')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="deletId" value="{{$cartItem['product']->id}}">
                                        <input type="submit" name="deleted" value="X">
                                    </form>
                                </td>

                            </tr>
                            @php
                            $i++ ;
                            $j++ ;
                            @endphp
                            @endforeach
                            @endisset
                        </tbody>
                    </table>
                </div>
                <script>
                    var grande = 0;
                    let prices = document.querySelectorAll('.sbtotal');
                    for (var i = 0; i < prices.length; i++) {
                        grande += parseInt(prices[i].innerHTML);
                    }
                    console.log(grande);

                    let finalQuantity = document.getElementsByName('quantity');

                    function add(id) {
                        let minus = document.getElementById('plus-' + id);
                        let plus = document.getElementById('minus-' + id);
                        let total = document.getElementById('total-' + id);
                        let price = document.getElementById('price-' + id);
                        let subTotal = document.querySelectorAll('.sbtotal');
                        let grandTotal = document.getElementById('grandTotal');
                        let cardTotal = document.getElementById('cardTotal');
                        var value = parseInt(document.getElementById('quantity-' + id).value);
                        document.getElementById('quantity-' + id).value = ++value;
                        total.innerHTML = '$' + ((price.innerHTML).substring(1, (price.innerHTML).length)) * value;
                        grande += parseInt(((price.innerHTML).substring(1, (price.innerHTML).length)));
                        grandTotal.innerHTML = '$' + (grande + 8);
                        cardTotal.innerHTML = '$' + grande;
                        //Final Quantity
                        let finalQte = document.getElementById('finalProductQt-' + id);
                        finalQte.value = value;
                        let finalTotal = document.getElementById('finalTotal');
                        finalTotal.value = grande + 8;
                    }

                    function subs(id) {
                        let minus = document.getElementById('plus-' + id);
                        let plus = document.getElementById('minus-' + id);
                        let total = document.getElementById('total-' + id);
                        let price = document.getElementById('price-' + id);
                        var value = parseInt(document.getElementById('quantity-' + id).value);
                        if (document.getElementById('quantity-' + id).value <= 1) {
                            document.getElementById('quantity-' + id).value = document.getElementById('quantity-' + id).value;
                        } else {
                            document.getElementById('quantity-' + id).value = --value;
                            total.innerHTML = '$' + ((price.innerHTML).substring(1, (price.innerHTML).length)) * value;
                            grande -= parseInt(((price.innerHTML).substring(1, (price.innerHTML).length)));
                            grandTotal.innerHTML = '$' + (grande + 8);
                            cardTotal.innerHTML = '$' + grande;
                            let finalQte = document.getElementById('finalProductQt-' + id);
                            inalQte.value = value;
                            let finalTotal = document.getElementById('finalTotal');
                            finalTotal.value = grande + 8;
                        }
                    }
                </script>
                <form action="/checkAll" method="POST">
                    @csrf
                    @foreach ($cartItems as $cartItem)
                    <input type="hidden" name="finalpId-[]" id="finalProductId-{{$cartItem['product']->id}}"
                        value="{{$cartItem['product']->id}}">
                    <input type="hidden" name="finalQte[]" id="finalProductQt-{{$cartItem['product']->id}}"
                        value="{{$cartItem['quantity']}}">
                    @endforeach
                    <input type="hidden" name="finalTotal" id="finalTotal" value="{{$totale}}">
                    <div class="cartbox__btn">
                        <ul
                            class="cart__btn__list d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
                            <li>
                                <button class="btn" style="border: none" type="submit" id="checkout">Check Out</button>
                            </li>
                        </ul>
                    </div>
                </form>
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
                            <li id="cardTotal">@isset($totale)${{number_format(doubleval($totale), 2)}}@endisset</li>
                            <li>$8</li>
                        </ul>
                    </div>
                    <div class="cart__total__amount">
                        <span>Grand Total</span>
                        <span id="grandTotal">@isset($totale)${{number_format(doubleval($totale+8), 2)}}@endisset</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
