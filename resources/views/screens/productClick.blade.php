@extends('layouts.nav');
@section('content')
    <section class="product-shop spad page-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">

                        @isset($product)

                        <div class="col-lg-6">
                            <div class="product-pic-zoom">
                                <img class="product-big-img" src="/images/img//product-single/product-1.jpg" alt="">
                                <div class="zoom-icon">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                            <div class="product-thumbs">
                                <div class="product-thumbs-track ps-slider owl-carousel">
                                    <div class="pt active" data-imgbigurl="images/img//product-single/product-1.jpg"><img
                                            src="/images/img//product-single/product-1.jpg" alt=""></div>
                                    <div class="pt" data-imgbigurl="images/img//product-single/product-2.jpg"><img
                                            src="/images/img//product-single/product-2.jpg" alt=""></div>
                                    <div class="pt" data-imgbigurl="images/img//product-single/product-3.jpg"><img
                                            src="/images/img//product-single/product-3.jpg" alt=""></div>
                                    <div class="pt" data-imgbigurl="images/img//product-single/product-3.jpg"><img
                                            src="/images/img//product-single/product-3.jpg" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details">
                                <div class="pd-title">
                                    <span>oranges</span>
                                    <h3>{{$product->title}}</h3>
                                    <a href="#" class="heart-icon"><i class="icon_heart_alt"></i></a>
                                </div>
                                <div class="pd-rating">
                                    @for($i = 0 ; $i<(int)$avg_stars;$i++)
                                        <i class="fa fa-star"></i>
                                    @endfor
                                    @for($j = $i ; $j<5;$j++)
                                        <i class="fa fa-star-o"></i>
                                    @endfor
                                        <span>({{count($product->reviews)}})</span>
                                </div>
                                <div class="pd-desc">
                                    <p>{{$product->description}}</p>
                                    <h4>${{$product->price}} <span>  ${{$product->old_price}}</span> </h4>
                                </div>
                                <div class="pd-color">
                                    <h6>Color</h6>
                                    <div class="pd-color-choose">
                                        <div class="cc-item">
                                            <input type="radio" id="cc-black">
                                            <label for="cc-black"></label>
                                        </div>
                                        <div class="cc-item">
                                            <input type="radio" id="cc-yellow">
                                            <label for="cc-yellow" class="cc-yellow"></label>
                                        </div>
                                        <div class="cc-item">
                                            <input type="radio" id="cc-violet">
                                            <label for="cc-violet" class="cc-violet"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="pd-size-choose">
                                    <div class="sc-item">
                                        <input type="radio" id="sm-size">
                                        <label for="sm-size">s</label>
                                    </div>
                                    <div class="sc-item">
                                        <input type="radio" id="md-size">
                                        <label for="md-size">m</label>
                                    </div>
                                    <div class="sc-item">
                                        <input type="radio" id="lg-size">
                                        <label for="lg-size">l</label>
                                    </div>
                                    <div class="sc-item">
                                        <input type="radio" id="xl-size">
                                        <label for="xl-size">xs</label>
                                    </div>
                                </div>
                                <div class="quantity">
                                    <form action="/addToCart" method="POST">
                                        @csrf
                                    <div >
                                        <input class="pro-qty" type="number" min=1 value=1 name="quantity" >
                                        <input class="pro-qty" type="hidden" min=1 value={{isset($product)?$product->id : null}} name="product_id" >
                                        <input type="submit" class="primary-btn pd-cart" value="Add To Cart"  >
                                    </div>

                                    </form>
                                </div>
                                <ul class="pd-tags">
                                    <li><span>CATEGORIE</span>: {{$product->category->name}}</li>
                                    <li><span>TAGS</span>: Clothing, T-shirt, Woman</li>
                                </ul>
                                <div class="pd-share">
                                    <div class="p-code">Sku : {{$product->product_sku}}</div>
                                    <div class="pd-social">
                                        <a href="#"><i class="ti-facebook"></i></a>
                                        <a href="#"><i class="ti-twitter-alt"></i></a>
                                        <a href="#"><i class="ti-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endisset
                    </div>
                    <div class="product-tab">
                        <div class="tab-item">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#tab-1" role="tab">DESCRIPTION</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab-2" role="tab">SPECIFICATIONS</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab-3" role="tab">Customer Reviews (02)</a>
                                </li>
                            </ul>
                        </div>

                        @isset($product)
                        <div class="tab-item-content">
                            <div class="tab-content">
                                <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                    <div class="product-content">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <h5>Introduction</h5>
                                                <p>{{$product->description}} </p>
                                                <h5>Features</h5>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
                                            </div>
                                            <div class="col-lg-5">
                                                <img src="images/img//product-single/tab-desc.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                    <div class="specification-table">
                                        <table>
                                            <tr>
                                                <td class="p-catagory">Customer Rating</td>
                                                <td>
                                                    <div class="pd-rating">
                                                        @for($i = 0 ; $i<(int)$avg_stars;$i++)
                                                            <i class="fa fa-star"></i>
                                                        @endfor
                                                        @for($j = $i ; $j<5;$j++)
                                                            <i class="fa fa-star-o"></i>
                                                        @endfor
                                                        <span>({{count($product->reviews)}})</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Price</td>
                                                <td>
                                                    <div class="p-price">${{$product->price}}</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Add To Cart</td>
                                                <td>
                                                    <div class="cart-add">+ add to cart</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Availability</td>
                                                <td>
                                                    <div class="p-stock">{{$product->product_quantity}} in stock</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Weight</td>
                                                <td>
                                                    <div class="p-weight">{{$product->product_weight}}kg</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Size</td>
                                                <td>
                                                    <div class="p-size">Xxl</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Color</td>
                                                <td><span class="cs-color"></span> </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Sku</td>
                                                <td>
                                                    <div class="p-code">{{$product->product_sku}}</div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-3" role="tabpanel">
                                    <div class="customer-review-option" >
                                        <h4>{{count($product->reviews)}} Comments</h4>
                                        <div class="comment-option" style=" max-height: 400px; overflow-y: scroll" >
                                        @foreach($product->reviews as $review)
                                            <div class="co-item">
                                                <div class="avatar-pic">
                                                    <img src="/images/img/product-single/tab-desc.jpg" alt="">
                                                </div>
                                                <div class="avatar-text">
                                                    <div class="at-rating">
                                                        @for($i = 0 ; $i< $review->stars ;$i++)
                                                            <i class="fa fa-star"></i>
                                                        @endfor
                                                        @for($j = $i ; $j<5;$j++)
                                                            <i class="fa fa-star-o"></i>
                                                        @endfor
                                                    </div>
                                                    <h5>{{$review->updated_at}}</h5>
                                                    <div class="at-reply">{{$review->review}} !</div>
                                                </div>
                                            </div>
                                        @endforeach
                                        </div>
                                        @isset($user)
                                            <div class="leave-comment">
                                                <h4>Leave A Comment</h4>
                                                <form action="{{ route('addComment') }}" method="POST" class="comment-form">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-lg-7">
                                                            <input type="number" placeholder="Your Raiting" min=0 max=5 maxlength=1  name="stars" required>
                                                            <input type="hidden" name="product_id" value="{{isset($product)?$product->id : null}}" >
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <textarea placeholder="Comment" name="review" required></textarea>
                                                            <button type="submit" class="site-btn">Send Comment</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        @endisset

                                    </div>
                                </div>
                            </div>
                        </div>
                            @endisset

                    </div>
                </div>
            </div>
            @isset($relatedProducts)
            <div class="related-products spad">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title">
                                <h2 style="margin-top: 38px;">Related Products</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                            @foreach($relatedProducts as $relatedProduct )

                                <div class="col-lg-3 col-sm-6">
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <img src="/images/img/products/women-4.jpg" alt="">
                                            <div class="icon">
                                                <i class="icon_heart_alt"></i>
                                            </div>
                                            <ul>
                                                <li class="w-icon active">
                                                    <form action="/addToCart" method="POST" >
                                                        @csrf
                                                        <input class="pro-qty" type="hidden" min=1 value=1 name="quantity" >
                                                        <input class="pro-qty" type="hidden" min=1 value={{isset($relatedProduct)?$relatedProduct->id : null}} name="product_id" >
                                                        <button  type="submit" > <i class="fa fa-cart-plus"></i> </button>
                                                    </form>
                                                </li>
                                                <li class="quick-view"><a href="{{url('/shopFinal-single/'.$relatedProduct->id.'')}}">+ Quick View</a></li>
                                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="pi-text">
                                            <div class="catagory-name">{{$relatedProduct->title}}</div>
                                            <a href="#">
                                                <h5 style="overflow: hidden;height: 40px;"> {{$relatedProduct->description}} </h5>
                                            </a>
                                            <div class="product-price">
                                                ${{$relatedProduct->price}}
                                                <span>  ${{$relatedProduct->old_price}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             @endforeach
                         @endisset

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
