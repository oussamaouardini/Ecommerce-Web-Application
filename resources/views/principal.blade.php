@extends('layouts.nav');
@section('content')
<style>
    ul#menu li {
        display: inline;
    }

    .activee {
        border: 1px solid #000 !important;
        display: block;
        padding: 3px;
        margin-right: 10px;
    }

    .incactivee {
        border: 1px solid #e2e2e2 !important;
    }

    .bdr {
        border: 1px solid #e2e2e2;
        display: block;
        padding: 3px;
        margin-right: 10px;
    }
</style>
<div id="img">
    <div class="container">
        <div id="title">THE SECOND BATTLE</div>
        <div id="line"></div>
        <div id="text">
            In the second battle. Dreepurl <br />
            and prohphes sillugallry, etc
        </div>
    </div>
</div>
<div class="banner-section spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="images/img/FootB.png" alt="">
                    <div class="inner-text">
                        <h4> <a href="/shopFinal/Football">Foot Ball</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="images/img/Run.png" alt="">
                    <div class="inner-text">
                        <h4> <a href="/shopFinal/Running">Running</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="images/img/cardx.png" alt="">
                    <div class="inner-text">
                        <h4> <a href="/shopFinal/Cardio">Cardio</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="women-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="product-large set-bg" data-setbg="images/BnnerWomen.png">
                    <h2>Women’s</h2>
                    <a href="#">Discover More</a>
                </div>
            </div>
            <div class="col-lg-8 offset-lg-1">
                <div class="filter-control">
                    <ul>
                        <li class="active"></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <div class="product-slider owl-carousel">
                    @isset($womanproducts)
                    @php
                    $i = 0 ;
                    @endphp
                    @foreach($womanproducts as $product)
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="productImages/{{$womanimages[$i]}}" style="height:300px;"
                                alt="{{$womanimages[$i]}}">


                            <ul>
                                <span class="crtid" data-fid="{{$product->id}}" id="{{$product->id}}">
                                    <li class="w-icon active  "><a href="#"><i class="icon_bag_alt "></i></a></li>
                                </span>
                                <li class="quick-view"><a href="#">+ Quick View</a></li>
                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">{{$product->id}}</div>
                            <a href="#">
                                <h5 style="overflow: hidden;height: 60px;"> {{$product->title}} </h5>
                            </a>
                            <div class="product-price">
                                ${{$product->price}}
                                <span> ${{$product->old_price}}</span>
                            </div>
                        </div>
                    </div>
                    @php
                    $i++
                    @endphp

                    @endforeach
                    @endisset
                </div>
            </div>
        </div>
    </div>
</section>
<div id="video1">
    <video class="vid1" id="firstvideo" src="videos/Shoes TV Ad – High Performance Running Shoes TVC by Yepme.mp4"
        poster="/images/imgvid1.jpg" onended="$('#play').show();this.load();">
        Your browser does not support the video tag.
    </video>
    <div id="play">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="84px" height="85px">
            <image x="0px" y="0px" width="84px" height="85px"
                xlink:href="data:img/png;base64,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" />
        </svg>
    </div>
</div>
<!-- Deal Of The Week Section Begin-->
<section class="deal-of-week set-bg spad mt-5 mb-5 " data-setbg="{{asset("images/time-bg.jpg")}}">
    <div class="container">
        <div class="col-lg-6 text-center">
            <div class="section-title">
                <h2>Deal Of The Week</h2>
                <p>This is one of our elite products that we recommend to every client, due to it's effeciency and it's
                    stylish looks in every circumstance. </p>
                <div class="product-price">
                    $35.00
                    <span>/ HanBag</span>
                </div>
            </div>
            <div class="countdown-timer" id="countdown">
                <div class="cd-item">
                    <span>56</span>
                    <p>Days</p>
                </div>
                <div class="cd-item">
                    <span>12</span>
                    <p>Hrs</p>
                </div>
                <div class="cd-item">
                    <span>40</span>
                    <p>Mins</p>
                </div>
                <div class="cd-item">
                    <span>52</span>
                    <p>Secs</p>
                </div>
            </div>
            <a href="#" class="primary-btn">Shop Now</a>
        </div>
    </div>
</section>
<!-- Deal Of The Week Section End -->

<div id="video2">
    <video class="vid2" id="firstvideo2" src="videos/adidas - Feel the Boost.mp4" poster="images/imgvid2.jpg"
        onended="$('#play2').show();this.load();">
        Your browser does not support the video tag.
    </video>
    <div id="play2">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="84px" height="85px">
            <image x="0px" y="0px" width="84px" height="85px"
                xlink:href="data:img/png;base64,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" />
        </svg>
    </div>
</div>
<section class="man-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="filter-control">
                    <ul>
                        <li class="active"></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <div class="product-slider owl-carousel">

                    @php
                    $i=0 ;
                    @endphp
                    @isset($manproducts)
                    @foreach($manproducts as $product)

                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="productImages/{{$manimages[$i]}}" style="height:300px;" alt="{{$manimages[$i]}}">
                            <ul>
                                <span class="crtid" data-fid="{{$product->id}}" id="{{$product->id}}">
                                    <li class="w-icon active  "><a href="#"><i class="icon_bag_alt "></i></a></li>
                                </span>
                                <li class="quick-view"><a href="#">+ Quick View</a></li>
                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">{{$product->title}}</div>
                            <div class="product-price">
                                ${{$product->price}}
                                <span> ${{$product->old_price}}</span>
                            </div>
                        </div>
                    </div>
                    @php
                    $i++;
                    @endphp
                    @endforeach
                    @endisset


                </div>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="product-large set-bg m-large" data-setbg="images/kobe.png">
                    <h2>Men’s</h2>
                    <a href="#">Discover More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="instagram-photo">
    <div class="insta-item set-bg" data-setbg="images/insta/1.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">Bingo_Collection</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="images/insta/2.png">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">Bingo_Collection</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="images/insta/3.png">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">Bingo_Collection</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="images/insta/4.png">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">Bingo_Collection</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="images/insta/5.png">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">Bingo_Collection</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="images/insta/6.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">Bingo_Collection</a></h5>
        </div>
    </div>
</div>
<div id="grid">
    <div id="top">
        <div id="gridtopleft">
            <span class="titlegrid">Easy shape system</span>
            <div id="topleft">
                <div>
                    <img src="images/shirt.jpg" alt="shirt" />
                </div>
                <div>
                    <span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="42px" height="73px">
                        </svg>
                        HEAT</span>
                    <span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="42px" height="73px">
                        </svg>
                        SHAPE</span>
                    <span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="42px" height="73px">
                        </svg>
                        COMFORT</span>
                </div>
            </div>
            <span class="textgrid">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </span>
        </div>
        <div id="gridtopright"></div>
    </div>
    <div id="bot">
        <div id="gridbotright">
            <span class="titlegrid">Muscle protection</span>
            <div id="botright">
                <div>
                    <span>
                        ADVANCED <br />
                        AERODYNAMIC
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="76px"
                        height="70px">
                        <path fill-rule="evenodd" fill="rgb(0, 0, 0)"
                            d="M71.493,35.656 L53.561,35.656 C51.106,35.656 49.115,33.665 49.115,31.210 L49.115,28.604 L42.064,35.656 L52.258,45.852 C53.995,47.590 53.995,50.403 52.258,52.141 L36.697,67.704 C34.961,69.441 32.147,69.441 30.410,67.704 C28.674,65.967 28.674,63.153 30.410,61.415 L42.828,48.996 L32.633,38.800 C30.897,37.064 30.897,34.250 32.633,32.513 L50.416,14.727 C53.231,11.909 58.007,13.965 58.007,17.870 L58.007,26.763 L71.493,26.763 C73.948,26.763 75.939,28.754 75.939,31.210 C75.939,33.665 73.948,35.656 71.493,35.656 ZM60.230,13.423 C56.547,13.423 53.561,10.437 53.561,6.753 C53.561,3.070 56.547,0.083 60.230,0.083 C63.913,0.083 66.899,3.070 66.899,6.753 C66.899,10.437 63.913,13.423 60.230,13.423 ZM42.929,15.928 L39.678,13.586 L30.028,23.237 C28.292,24.974 25.478,24.974 23.741,23.237 C22.005,21.500 22.005,18.687 23.741,16.950 L35.968,4.721 C37.466,3.223 39.810,2.990 41.578,4.165 L49.792,9.853 C48.855,10.293 47.998,10.857 47.272,11.584 L42.929,15.928 ZM17.993,28.986 L6.730,28.986 C5.501,28.986 4.507,27.992 4.507,26.763 C4.507,25.534 5.501,24.540 6.730,24.540 L17.993,24.540 C19.222,24.540 20.216,25.534 20.216,26.763 C20.216,27.992 19.222,28.986 17.993,28.986 ZM17.993,11.200 L6.730,11.200 C5.501,11.200 4.507,10.205 4.507,8.976 C4.507,7.748 5.501,6.753 6.730,6.753 L17.993,6.753 C19.222,6.753 20.216,7.748 20.216,8.976 C20.216,10.205 19.222,11.200 17.993,11.200 ZM15.770,17.870 C15.770,19.098 14.776,20.093 13.547,20.093 L2.284,20.093 C1.055,20.093 0.061,19.098 0.061,17.870 C0.061,16.641 1.055,15.647 2.284,15.647 L13.547,15.647 C14.776,15.647 15.770,16.641 15.770,17.870 ZM27.215,37.932 C27.612,39.431 28.364,40.818 29.490,41.945 L32.633,45.088 L10.021,67.704 C8.285,69.441 5.471,69.441 3.734,67.704 C1.998,65.967 1.998,63.153 3.734,61.415 L27.215,37.932 Z" />
                    </svg>
                </div>
                <div>
                    <span>
                        SECURE <br />
                        COSTUM FIT
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="76px"
                        height="70px">
                        <path fill-rule="evenodd" fill="rgb(0, 0, 0)"
                            d="M71.493,35.656 L53.561,35.656 C51.106,35.656 49.115,33.665 49.115,31.210 L49.115,28.604 L42.064,35.656 L52.258,45.852 C53.995,47.590 53.995,50.403 52.258,52.141 L36.697,67.704 C34.961,69.441 32.147,69.441 30.410,67.704 C28.674,65.967 28.674,63.153 30.410,61.415 L42.828,48.996 L32.633,38.800 C30.897,37.064 30.897,34.250 32.633,32.513 L50.416,14.727 C53.231,11.909 58.007,13.965 58.007,17.870 L58.007,26.763 L71.493,26.763 C73.948,26.763 75.939,28.754 75.939,31.210 C75.939,33.665 73.948,35.656 71.493,35.656 ZM60.230,13.423 C56.547,13.423 53.561,10.437 53.561,6.753 C53.561,3.070 56.547,0.083 60.230,0.083 C63.913,0.083 66.899,3.070 66.899,6.753 C66.899,10.437 63.913,13.423 60.230,13.423 ZM42.929,15.928 L39.678,13.586 L30.028,23.237 C28.292,24.974 25.478,24.974 23.741,23.237 C22.005,21.500 22.005,18.687 23.741,16.950 L35.968,4.721 C37.466,3.223 39.810,2.990 41.578,4.165 L49.792,9.853 C48.855,10.293 47.998,10.857 47.272,11.584 L42.929,15.928 ZM17.993,28.986 L6.730,28.986 C5.501,28.986 4.507,27.992 4.507,26.763 C4.507,25.534 5.501,24.540 6.730,24.540 L17.993,24.540 C19.222,24.540 20.216,25.534 20.216,26.763 C20.216,27.992 19.222,28.986 17.993,28.986 ZM17.993,11.200 L6.730,11.200 C5.501,11.200 4.507,10.205 4.507,8.976 C4.507,7.748 5.501,6.753 6.730,6.753 L17.993,6.753 C19.222,6.753 20.216,7.748 20.216,8.976 C20.216,10.205 19.222,11.200 17.993,11.200 ZM15.770,17.870 C15.770,19.098 14.776,20.093 13.547,20.093 L2.284,20.093 C1.055,20.093 0.061,19.098 0.061,17.870 C0.061,16.641 1.055,15.647 2.284,15.647 L13.547,15.647 C14.776,15.647 15.770,16.641 15.770,17.870 ZM27.215,37.932 C27.612,39.431 28.364,40.818 29.490,41.945 L32.633,45.088 L10.021,67.704 C8.285,69.441 5.471,69.441 3.734,67.704 C1.998,65.967 1.998,63.153 3.734,61.415 L27.215,37.932 Z" />
                    </svg>
                </div>
                <div>
                    <span>
                        MADE <br />
                        IN THE USA
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="76px"
                        height="70px">
                        <path fill-rule="evenodd" fill="rgb(0, 0, 0)"
                            d="M71.493,35.656 L53.561,35.656 C51.106,35.656 49.115,33.665 49.115,31.210 L49.115,28.604 L42.064,35.656 L52.258,45.852 C53.995,47.590 53.995,50.403 52.258,52.141 L36.697,67.704 C34.961,69.441 32.147,69.441 30.410,67.704 C28.674,65.967 28.674,63.153 30.410,61.415 L42.828,48.996 L32.633,38.800 C30.897,37.064 30.897,34.250 32.633,32.513 L50.416,14.727 C53.231,11.909 58.007,13.965 58.007,17.870 L58.007,26.763 L71.493,26.763 C73.948,26.763 75.939,28.754 75.939,31.210 C75.939,33.665 73.948,35.656 71.493,35.656 ZM60.230,13.423 C56.547,13.423 53.561,10.437 53.561,6.753 C53.561,3.070 56.547,0.083 60.230,0.083 C63.913,0.083 66.899,3.070 66.899,6.753 C66.899,10.437 63.913,13.423 60.230,13.423 ZM42.929,15.928 L39.678,13.586 L30.028,23.237 C28.292,24.974 25.478,24.974 23.741,23.237 C22.005,21.500 22.005,18.687 23.741,16.950 L35.968,4.721 C37.466,3.223 39.810,2.990 41.578,4.165 L49.792,9.853 C48.855,10.293 47.998,10.857 47.272,11.584 L42.929,15.928 ZM17.993,28.986 L6.730,28.986 C5.501,28.986 4.507,27.992 4.507,26.763 C4.507,25.534 5.501,24.540 6.730,24.540 L17.993,24.540 C19.222,24.540 20.216,25.534 20.216,26.763 C20.216,27.992 19.222,28.986 17.993,28.986 ZM17.993,11.200 L6.730,11.200 C5.501,11.200 4.507,10.205 4.507,8.976 C4.507,7.748 5.501,6.753 6.730,6.753 L17.993,6.753 C19.222,6.753 20.216,7.748 20.216,8.976 C20.216,10.205 19.222,11.200 17.993,11.200 ZM15.770,17.870 C15.770,19.098 14.776,20.093 13.547,20.093 L2.284,20.093 C1.055,20.093 0.061,19.098 0.061,17.870 C0.061,16.641 1.055,15.647 2.284,15.647 L13.547,15.647 C14.776,15.647 15.770,16.641 15.770,17.870 ZM27.215,37.932 C27.612,39.431 28.364,40.818 29.490,41.945 L32.633,45.088 L10.021,67.704 C8.285,69.441 5.471,69.441 3.734,67.704 C1.998,65.967 1.998,63.153 3.734,61.415 L27.215,37.932 Z" />
                    </svg>
                </div>
            </div>
            <span class="textgrid">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </span>
        </div>
        <div id="gridbotleft"></div>
    </div>
</div>
<div class="benif" style="padding-top: 50px; padding-bottom: 50px;">
    <div class="benefit-items" style="margin-top: 0px;">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-benefit">
                    <div class="sb-icon">
                        <img src="images/img/icon-1.png" alt="">
                    </div>
                    <div class="sb-text">
                        <h6 style="color: white">Free Shipping</h6>
                        <p style="color: white">For all order over 99$</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-benefit">
                    <div class="sb-icon">
                        <img src="images/img/icon-2.png" alt="">
                    </div>
                    <div class="sb-text">
                        <h6 style="color: white">Delivery On Time</h6>
                        <p style="color: white">If good have prolems</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-benefit">
                    <div class="sb-icon">
                        <img src="images/img/icon-1.png" alt="">
                    </div>
                    <div class="sb-text">
                        <h6 style="color: white">Secure Payment</h6>
                        <p style="color: white">100% secure payment</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="Tending">
    <h1>Trending Now</h1>

    <div class="product-slider owl-carousel">
        @isset($falshsales)
        @php
        $i = 0 ;
        @endphp
        @foreach($falshsales as $product)
        <div class="product-item">
            <div class="pi-pic">
                <img src="productImages/{{$trendimages[$i]}}" style="height:400px;" alt="images/produit1.jpg">

                <ul>
                    <span class="crtid" data-fid="{{$product->id}}" id="{{$product->id}}">
                        <li class="w-icon active  "><a href="#"><i class="icon_bag_alt "></i></a></li>
                    </span>
                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                </ul>
            </div>
            <div class="pi-text">
                <div class="catagory-name">{{$product->id}} </div>
                <a href="#">
                    <h5 style="overflow: hidden;height: 60px;"> {{$product->title}} </h5>
                </a>
                <div class="product-price">
                    ${{$product->price}}
                    <span> ${{$product->old_price}}</span>
                </div>
            </div>
        </div>
        @php
        $i++
        @endphp

        @endforeach
        @endisset
    </div>

</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bingo Team</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Product Added Successfully .
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="closeModale"> Continue Shopping </button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="goToCart()">Go To Cart
                </button>

            </div>
        </div>
    </div>
</div>

<script>
    function size1() {
            var element1 = document.getElementById("s1");
            var element2 = document.getElementById("s2");
            var element3 = document.getElementById("s3");
            var element4 = document.getElementById("s4");
            element1.classList.toggle("activee");
            element2.classList.remove("activee");
            element3.classList.remove("activee");
            element4.classList.remove("activee");

        }
        function size2() {
            var element1 = document.getElementById("s2");
            var element2 = document.getElementById("s1");
            var element3 = document.getElementById("s3");
            var element4 = document.getElementById("s4");
            element1.classList.toggle("activee");
            element2.classList.remove("activee");
            element3.classList.remove("activee");
            element4.classList.remove("activee");

        }
        function size3() {
            var element1 = document.getElementById("s3");
            var element2 = document.getElementById("s2");
            var element3 = document.getElementById("s1");
            var element4 = document.getElementById("s4");
            element1.classList.toggle("activee");
            element2.classList.remove("activee");
            element3.classList.remove("activee");
            element4.classList.remove("activee");

        }
        function size4() {
            var element1 = document.getElementById("s4");
            var element2 = document.getElementById("s2");
            var element3 = document.getElementById("s3");
            var element4 = document.getElementById("s1");
            element1.classList.toggle("activee");
            element2.classList.remove("activee");
            element3.classList.remove("activee");
            element4.classList.remove("activee");
        }

        function byIt() {
            window.location.href = "/checkout";
        }

        function unlove(id){

        }

        function like(id)
        {
            if((document).getElementById('id-'+id).innerHTML == "🤍")
            {
                (document).getElementById('id-'+id).innerHTML = "🧡";
            }
            else{
                (document).getElementById('id-'+id).innerHTML = "🤍";
            }
        }

        function love( id ) {
           // addwishuser

            window.location.href = "/addwishuser";
        }

        function goToCart(){
document.location = "/creditCard";

        }





        $(document).ready(function(){






            $( "#closeModale" ).click(function() {
                $('#exampleModal').modal('hide');
            });

           // console.log(product_id);
           $( ".crtid" ).click(function() {
            var product_id = $(this)["context"].id;
            console.log(product_id);

            //send value by ajax to server
           $.ajax({
                url:"{{ url('addToCartAjax') }}",
                type:'POST',
                data:{
                    product_id: product_id,
                    quantity : '1',
                    "_token": "{{ csrf_token() }}",
                },
            }).done(function(response) {

                console.log(response);
                if(response['status']==40400){
                    document.location = "newlogin";
                }else if(response['status']==20020){

                    console.log(response);
                    $("#mycrt").html(response['cartHtml']);
                    $("#mycrtnb").html(response['qte']);
                    $("#mycrttotal").html((response['total']).toFixed(2));
                    $("#mycrttotalh").html((response['total']).toFixed(2));

                    $('#exampleModal').modal('show');

                }
              //  document.getElementById("status-"+product_id).value = response['status'];
            //success
            }).fail(function(error){
                console.log(error);
            });




        });
        });
</script>
@endsection
