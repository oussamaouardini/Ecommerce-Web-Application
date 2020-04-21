@extends('layouts.nav');
@section('content')
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                    <span>Shop</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Product Shop Section Begin -->
<section class="product-shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                <div class="filter-widget">
                    <h4 class="fw-title">Categories</h4>
                    <div class="fw-brand-check">
                        <div class="bc-item">
                            <label for="bc-Men">
                                <a href="?categories=Man">Men</a>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label for="bc-Women">
                                <a href="?categories=Woman">Women</a>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label for="bc-Kids">
                                <a href="?categories=Kid">Kids</a>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Brand</h4>
                    <div class="fw-brand-check">
                        <div class="bc-item">
                            <label for="bc-calvin">
                                <a href="?brand=Adidas">Adidas</a>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label for="bc-diesel">
                                <a href="?brand=Nike">Nike</a>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label for="bc-polo">
                                <a href="?brand=Reebook">Reebook</a>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label for="bc-tommy">
                                <a href="?brand=Puma">Puma</a>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Color</h4>
                    <div class="fw-color-choose">
                        <div class="cs-item">
                            <input type="radio" id="cs-black">
                            <label class="cs-black" for="cs-black"><a href="?color=black">Black</a></label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-violet">
                            <label class="cs-violet" for="cs-violet"><a href="?color=black">Violet</a></label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-blue">
                            <label class="cs-blue" for="cs-blue"><a href="?color=black">Blue</a></label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-yellow">
                            <label class="cs-yellow" for="cs-yellow"><a href="?color=black">Yellow</a></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 order-1 order-lg-2">
                <div class="product-show-option">
                    <div class="row">
                        <div class="col-lg-7 col-md-7">
                            <div class="select-option">
                                <select class="sorting">
                                    <option value="">Default Sorting</option>
                                </select>
                                <select class="p-show">
                                    <option value="">Show:</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
                <style>
                    .pagination {
                        background-color: white;
                        border: 1px solid white;
                    }

                    nav {
                        background-color: white;
                    }
                </style>
                <div class="product-list">
                    <div class="row">

                        @isset($products)
                        @php
                        $i = 0 ;
                        @endphp
                        @foreach($products as $product)
                        <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                                <div class="pi-pic">
                                    <img src="{{asset("productImages/$images[$i]")}}" alt="{{$images[$i]}}"
                                        style="height:300px;">
                                    <div class="sale pp-sale">Sale</div>
                                    <ul>
                                        <li class="quick-view"><a href="{{url('/shopFinal-single/'.$product->id.'')}}">+
                                                Quick View</a></li>
                                    </ul>
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name">{{$product->title }} </div>
                                    <div class="product-price">
                                        ${{$product->price}}
                                        <span> ${{$product->old_price}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php
                        $i++;
                        @endphp
                        @endforeach
                    </div>
                    <div class="col-lg-5 col-md-5 text-right">
                        {{ $products->links() }}
                    </div>
                    @endisset
                </div>
            </div>
        </div>
</section>
@endsection
