@extends('layouts.nav');
@section('content')
    <div class="wishlist-area section-padding--lg bg__white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="wishlist-content">
                        <form action="#">
                            <div class="wishlist-table wnro__table table-responsive">
                                <table>
                                    <thead>
                                    <tr>
                                        <th class="product-remove"></th>
                                        <th class="product-thumbnail"></th>
                                        <th class="product-name"><span class="nobr">Product Name</span></th>
                                        <th class="product-price"><span class="nobr"> Unit Price </span></th>
                                        <th class="product-stock-stauts"><span class="nobr"> Stock Status </span></th>
                                        <th class="product-add-to-cart"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="product-remove"><a href="#">×</a></td>
                                        <td class="product-thumbnail"><a href="#"><img src="{{asset('css/cardandCheckout/images/1.jpg')}}" alt=""></a></td>
                                        <td class="product-name"><a href="#">Natoque penatibus</a></td>
                                        <td class="product-price"><span class="amount">$165.00</span></td>
                                        <td class="product-stock-status"><span class="wishlist-in-stock">In Stock</span></td>
                                        <td class="product-add-to-cart"><a href="#"> Add to Cart</a></td>
                                    </tr>
                                    <tr>
                                        <td class="product-remove"><a href="#">×</a></td>
                                        <td class="product-thumbnail"><a href="#"><img src="{{asset('css/cardandCheckout/images/1.jpg')}}" alt=""></a></td>
                                        <td class="product-name"><a href="#">Quisque fringilla</a></td>
                                        <td class="product-price"><span class="amount">$50.00</span></td>
                                        <td class="product-stock-status"><span class="wishlist-in-stock">In Stock</span></td>
                                        <td class="product-add-to-cart"><a href="#"> Add to Cart</a></td>
                                    </tr>
                                    <tr>
                                        <td class="product-remove"><a href="#">×</a></td>
                                        <td class="product-thumbnail"><a href="#"><img src="{{asset('css/cardandCheckout/images/1.jpg')}}" alt=""></a></td>
                                        <td class="product-name"><a href="#">Quisque fringilla</a></td>
                                        <td class="product-price"><span class="amount">$65.00</span></td>
                                        <td class="product-stock-status"><span class="wishlist-in-stock">In Stock</span></td>
                                        <td class="product-add-to-cart"><a href="#"> Add to Cart</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
