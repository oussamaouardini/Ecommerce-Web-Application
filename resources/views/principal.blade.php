@extends('layouts.nav');
@section('content')
    <style>
        ul#menu li {
            display:inline;
        }
        .activee
        {
            border: 1px solid #000 !important;
            display: block;
            padding: 3px;
            margin-right: 10px;
        }
        .incactivee
        {
            border: 1px solid #e2e2e2!important;
        }
        .bdr
        {
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
                        <img src="images/img/banner-1.jpg" alt="">
                        <div class="inner-text">
                            <h4>Foot Ball</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="images/img/banner-2.jpg" alt="">
                        <div class="inner-text">
                            <h4>Basket Ball</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="images/img/banner-3.jpg" alt="">
                        <div class="inner-text">
                            <h4>Hand Ball</h4>
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
                    <div class="product-large set-bg" data-setbg="images/img/products/women-large.jpg">
                        <h2>Women’s</h2>
                        <a href="#">Discover More</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Clothings</li>
                            <li>Shoes</li>
                            <li>Accessories</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="images/img/products/women-1.jpg" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Coat</div>
                                <a href="#">
                                    <h5>Pure Pineapple</h5>
                                </a>
                                <div class="product-price">
                                    $14.00
                                    <span>$35.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="images/img/products/women-2.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Shoes</div>
                                <a href="#">
                                    <h5>Guangzhou sweater</h5>
                                </a>
                                <div class="product-price">
                                    $13.00
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="images/img/products/women-3.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Towel</div>
                                <a href="#">
                                    <h5>Pure Pineapple</h5>
                                </a>
                                <div class="product-price">
                                    $34.00
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="images/img/products/women-4.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Towel</div>
                                <a href="#">
                                    <h5>Converse Shoes</h5>
                                </a>
                                <div class="product-price">
                                    $34.00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="video1">
        <video
            class="vid1"
            id="firstvideo"
            src="videos/Shoes TV Ad – High Performance Running Shoes TVC by Yepme.mp4"
            poster="/images/imgvid1.jpg"
            onended="$('#play').show();this.load();"
        >
            Your browser does not support the video tag.
        </video>
        <div id="play">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="84px"
                height="85px"
            >
                <image
                    x="0px"
                    y="0px"
                    width="84px"
                    height="85px"
                    xlink:href="data:img/png;base64,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"
                />
            </svg>
            <!-- <svg
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              width="84px"
              height="85px"
            >
              <image
                x="0px"
                y="0px"
                width="84px"
                height="85px"
                xlink:href="data:img/png;base64,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"
              />
            </svg>-->
        </div>
    </div>
    <div id="popular">
        <div id="left">
            <div id="slideprod">
                <div>
                    <img src="images/produit.jpg" alt="image" />
                </div>
                <div>
                    <img src="images/produit.jpg" alt="image" />
                </div>
                <div>
                    <img src="images/produit.jpg" alt="image" />
                </div>
                <div>
                    <img src="images/produit.jpg" alt="image" />
                </div>
                <div>
                    <img src="images/produit.jpg" alt="image" />
                </div>
                <div>
                    <img src="images/produit.jpg" alt="image" />
                </div>
            </div>
            <div class="navimg">
          <span id="previmg">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="7px"
                height="15px"
            >
              <path
                  fill-rule="evenodd"
                  fill="rgb(0, 0, 0)"
                  d="M7.009,0.008 L-0.010,7.499 L7.009,14.991 L7.009,0.008 Z"
              />
            </svg>
          </span>
                <span id="currentprod">1</span>
                <span>/</span>
                <span id="maxprod">6</span>
                <span id="nextimg"
                ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="7px"
                        height="15px"
                    >
              <path
                  fill-rule="evenodd"
                  fill="rgb(0, 0, 0)"
                  d="M-0.010,14.991 L7.010,7.499 L-0.010,0.008 L-0.010,14.991 Z"
              />
            </svg>
          </span>
            </div>
        </div>
        @isset($topsales)
            @foreach($topsales as $topsale)

                <div id="right">
                    <div id="titleproduit">
                        {{  $topsale->title }}
                    </div>
                    <div id = "price">
                        $  {{  $topsale->price }}
                    </div>

                    <div class = "row-cols-2">
                        <div class="col">
                            <div id = "size">
                                SIZE :
                            </div>
                        </div>
                        <div class="col">
                            <ul id="menu">
                                <li id = "s1" class = "bdr activee" onclick="size1()"> 45 </li>
                                <li id = "s2" class = "bdr" onclick="size2()"> 40 </li>
                                <li id = "s3" class = "bdr" onclick="size3()"> 38 </li>
                                <li id = "s4" class = "bdr" onclick="size4()"> 33 </li>
                            </ul>
                        </div>
                    </div>
                    <div id="productQte">
                        <div
                            id="minus"
                            onclick="if(parseInt($('#Qteproduct input').val())>1){$('#Qteproduct input').val(parseInt($('#Qteproduct input').val())-1);}"
                        >
                            -
                        </div>
                        <div id="Qteproduct"><input type="text" value="1" /></div>
                        <div
                            id="plus"
                            onclick="$('#Qteproduct input').val(parseInt($('#Qteproduct input').val())+1);"
                        >
                            +
                        </div>
                    </div>
                    <div id="buy">
                        @isset($login)

                        <div id="addtocard" onclick="" >
                            Add to cart
                        </div>
                        @endisset
                            @isset($total)
                                <div id="addtocard" onclick="addtocart()" >
                                    Add to cart
                                </div>
                            @endisset
                        <div id="buynow">
                            Buy it now
                        </div>
                    </div>
                </div>
            @endforeach


        @endisset

    </div>
    <div id="video2">
        <video
            class="vid2"
            id="firstvideo2"
            src="videos/adidas - Feel the Boost.mp4"
            poster="images/imgvid2.jpg"
            onended="$('#play2').show();this.load();"
        >
            Your browser does not support the video tag.
        </video>
        <div id="play2">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="84px"
                height="85px"
            >
                <image
                    x="0px"
                    y="0px"
                    width="84px"
                    height="85px"
                    xlink:href="data:img/png;base64,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"
                />
            </svg>
        </div>
    </div>
    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Clothings</li>
                            <li>Shoes</li>
                            <li>Accessories</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="images/img/products/man-1.jpg" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Coat</div>
                                <a href="#">
                                    <h5>Pure Pineapple</h5>
                                </a>
                                <div class="product-price">
                                    $14.00
                                    <span>$35.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="images/img/products/man-2.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Shoes</div>
                                <a href="#">
                                    <h5>Guangzhou sweater</h5>
                                </a>
                                <div class="product-price">
                                    $13.00
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="images/img/products/man-3.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Towel</div>
                                <a href="#">
                                    <h5>Pure Pineapple</h5>
                                </a>
                                <div class="product-price">
                                    $34.00
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="images/img/products/man-4.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Towel</div>
                                <a href="#">
                                    <h5>Converse Shoes</h5>
                                </a>
                                <div class="product-price">
                                    $34.00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg m-large" data-setbg="images/img/products/man-large.jpg">
                        <h2>Men’s</h2>
                        <a href="#">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="instagram-photo">
        <div class="insta-item set-bg" data-setbg="images/img/insta-1.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Bingo_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="images/img/insta-2.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Bingo_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="images/img/insta-3.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Bingo_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="images/img/insta-4.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Bingo_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="images/img/insta-5.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Bingo_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="images/img/insta-6.jpg">
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
              <span
              ><svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="42px"
                      height="73px"
                  >
                  <image
                      x="0px"
                      y="32px"
                      width="42px"
                      height="41px"
                      xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAApCAQAAADpXnN+AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkAQsELTCqmp8aAAACRElEQVRIx+3WS0hUURzH8c88KFMxoajGKKxNQY9FlBSUGBGBRAXVomgTQtHKRdALgjauWrUxCKI2EUHQrijalBERBK7ssRCSsgjKIst0Rk+LeTTjzKijQht/d3HvOf/f/Z57Hvd/Dvna5adQcA3bYbwadI9zBWfzDdEC+0q14wDzNBRBF1lUVLcmnxQvCCWlxP3RZUCdbRYiVQQYk0TKC/2qbbYMw4IyOiYp+GAVEl4KgoNFrnV6Bd80o8o9QXBVpFz3sxo1FQWMlvrCUtCIGGL5bZd1xUsRoipXmMwwObQUYuI+TAAdMgiWFEWq1SPlT+XQAW/BAQvGRVrVo09f5dAx96Ww27kC1wGnwSP9lUO57yGiLuq0UZ0ajU67rg4f3Sj/YnwCaMoZG6wUcdI+r41otBb8dta7qULHkD+3PdrctBwJiVztsAtu5Uppd8EaKex+lQiSGTg8ttdtnwyBpK+6HHElFx+VBDXlvjSiWQx9vufVdjsqoclqMf1eZdZEViPeg02W+lxqKFoMCILLKtEhQ4Kk9lLBLZms9EVTRdA6zwTBJ4f/DWatnU7o1JfJ4ZcqQkKrQUHwy13t9kvQYShvW7hWlPunolN+5Agp93ieK77VVvRLTlUtnuQ4vTwVBK+dt2qawLTqHfdYEPTItNAxI2BWe9LQ7HxVzQo0Mx9ZaGTaoBKaznYyB52DzkH/CzQ5K7SR9C27m66wdcZJZdj69ENEl+0YMzpjaBAVw5vsSTg6i6M7P+6OxWryziQzUwQP/gIkgbc/BOFjpgAAAABJRU5ErkJggg=="
                  />
                  <path
                      fill-rule="evenodd"
                      fill="rgb(0, 0, 0)"
                      d="M26.110,12.363 C27.416,13.904 28.897,15.650 28.897,19.028 C28.897,22.405 27.416,24.152 26.110,25.692 C25.748,26.119 25.113,26.168 24.692,25.802 C24.270,25.436 24.221,24.794 24.583,24.368 C25.818,22.911 26.885,21.652 26.885,19.028 C26.885,16.403 25.818,15.145 24.583,13.688 C23.276,12.147 21.795,10.400 21.795,7.023 C21.795,3.645 23.276,1.899 24.583,0.358 C24.944,-0.068 25.579,-0.117 26.001,0.249 C26.423,0.614 26.471,1.257 26.110,1.683 C24.874,3.140 23.807,4.398 23.807,7.023 C23.807,9.647 24.874,10.906 26.110,12.363 ZM20.608,12.363 C21.915,13.904 23.396,15.650 23.396,19.028 C23.396,22.405 21.915,24.152 20.608,25.692 C20.247,26.119 19.612,26.168 19.190,25.802 C18.768,25.436 18.720,24.794 19.082,24.368 C20.317,22.911 21.384,21.653 21.384,19.028 C21.384,16.403 20.317,15.145 19.082,13.688 C17.775,12.147 16.294,10.400 16.294,7.023 C16.294,3.645 17.775,1.899 19.082,0.358 C19.443,-0.068 20.078,-0.117 20.500,0.249 C20.921,0.614 20.970,1.257 20.608,1.683 C19.373,3.140 18.306,4.398 18.306,7.023 C18.306,9.647 19.373,10.906 20.608,12.363 ZM15.107,12.363 C16.414,13.904 17.894,15.650 17.894,19.028 C17.894,22.405 16.414,24.152 15.107,25.692 C14.746,26.119 14.111,26.168 13.689,25.802 C13.267,25.436 13.219,24.794 13.580,24.368 C14.816,22.911 15.883,21.653 15.883,19.028 C15.883,16.403 14.816,15.145 13.580,13.688 C12.274,12.147 10.793,10.400 10.793,7.023 C10.793,3.645 12.274,1.899 13.580,0.359 C13.942,-0.068 14.577,-0.117 14.998,0.249 C15.420,0.614 15.469,1.257 15.107,1.683 L15.107,1.683 C13.872,3.140 12.805,4.398 12.805,7.023 C12.805,9.647 13.872,10.906 15.107,12.363 Z"
                  />
                </svg>
                HEAT</span>
                        <span
                        ><svg
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="42px"
                                height="73px"
                            >
                  <image
                      x="0px"
                      y="32px"
                      width="42px"
                      height="41px"
                      xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAApCAQAAADpXnN+AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkAQsELTCqmp8aAAACRElEQVRIx+3WS0hUURzH8c88KFMxoajGKKxNQY9FlBSUGBGBRAXVomgTQtHKRdALgjauWrUxCKI2EUHQrijalBERBK7ssRCSsgjKIst0Rk+LeTTjzKijQht/d3HvOf/f/Z57Hvd/Dvna5adQcA3bYbwadI9zBWfzDdEC+0q14wDzNBRBF1lUVLcmnxQvCCWlxP3RZUCdbRYiVQQYk0TKC/2qbbYMw4IyOiYp+GAVEl4KgoNFrnV6Bd80o8o9QXBVpFz3sxo1FQWMlvrCUtCIGGL5bZd1xUsRoipXmMwwObQUYuI+TAAdMgiWFEWq1SPlT+XQAW/BAQvGRVrVo09f5dAx96Ww27kC1wGnwSP9lUO57yGiLuq0UZ0ajU67rg4f3Sj/YnwCaMoZG6wUcdI+r41otBb8dta7qULHkD+3PdrctBwJiVztsAtu5Uppd8EaKex+lQiSGTg8ttdtnwyBpK+6HHElFx+VBDXlvjSiWQx9vufVdjsqoclqMf1eZdZEViPeg02W+lxqKFoMCILLKtEhQ4Kk9lLBLZms9EVTRdA6zwTBJ4f/DWatnU7o1JfJ4ZcqQkKrQUHwy13t9kvQYShvW7hWlPunolN+5Agp93ieK77VVvRLTlUtnuQ4vTwVBK+dt2qawLTqHfdYEPTItNAxI2BWe9LQ7HxVzQo0Mx9ZaGTaoBKaznYyB52DzkH/CzQ5K7SR9C27m66wdcZJZdj69ENEl+0YMzpjaBAVw5vsSTg6i6M7P+6OxWryziQzUwQP/gIkgbc/BOFjpgAAAABJRU5ErkJggg=="
                  />
                  <path
                      fill-rule="evenodd"
                      fill="rgb(0, 0, 0)"
                      d="M26.110,12.363 C27.416,13.904 28.897,15.650 28.897,19.028 C28.897,22.405 27.416,24.152 26.110,25.692 C25.748,26.119 25.113,26.168 24.692,25.802 C24.270,25.436 24.221,24.794 24.583,24.368 C25.818,22.911 26.885,21.652 26.885,19.028 C26.885,16.403 25.818,15.145 24.583,13.688 C23.276,12.147 21.795,10.400 21.795,7.023 C21.795,3.645 23.276,1.899 24.583,0.358 C24.944,-0.068 25.579,-0.117 26.001,0.249 C26.423,0.614 26.471,1.257 26.110,1.683 C24.874,3.140 23.807,4.398 23.807,7.023 C23.807,9.647 24.874,10.906 26.110,12.363 ZM20.608,12.363 C21.915,13.904 23.396,15.650 23.396,19.028 C23.396,22.405 21.915,24.152 20.608,25.692 C20.247,26.119 19.612,26.168 19.190,25.802 C18.768,25.436 18.720,24.794 19.082,24.368 C20.317,22.911 21.384,21.653 21.384,19.028 C21.384,16.403 20.317,15.145 19.082,13.688 C17.775,12.147 16.294,10.400 16.294,7.023 C16.294,3.645 17.775,1.899 19.082,0.358 C19.443,-0.068 20.078,-0.117 20.500,0.249 C20.921,0.614 20.970,1.257 20.608,1.683 C19.373,3.140 18.306,4.398 18.306,7.023 C18.306,9.647 19.373,10.906 20.608,12.363 ZM15.107,12.363 C16.414,13.904 17.894,15.650 17.894,19.028 C17.894,22.405 16.414,24.152 15.107,25.692 C14.746,26.119 14.111,26.168 13.689,25.802 C13.267,25.436 13.219,24.794 13.580,24.368 C14.816,22.911 15.883,21.653 15.883,19.028 C15.883,16.403 14.816,15.145 13.580,13.688 C12.274,12.147 10.793,10.400 10.793,7.023 C10.793,3.645 12.274,1.899 13.580,0.359 C13.942,-0.068 14.577,-0.117 14.998,0.249 C15.420,0.614 15.469,1.257 15.107,1.683 L15.107,1.683 C13.872,3.140 12.805,4.398 12.805,7.023 C12.805,9.647 13.872,10.906 15.107,12.363 Z"
                  />
                </svg>
                SHAPE</span>
                        <span><svg
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="42px"
                                height="73px"
                            >
                  <image
                      x="0px"
                      y="32px"
                      width="42px"
                      height="41px"
                      xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAApCAQAAADpXnN+AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkAQsELTCqmp8aAAACRElEQVRIx+3WS0hUURzH8c88KFMxoajGKKxNQY9FlBSUGBGBRAXVomgTQtHKRdALgjauWrUxCKI2EUHQrijalBERBK7ssRCSsgjKIst0Rk+LeTTjzKijQht/d3HvOf/f/Z57Hvd/Dvna5adQcA3bYbwadI9zBWfzDdEC+0q14wDzNBRBF1lUVLcmnxQvCCWlxP3RZUCdbRYiVQQYk0TKC/2qbbYMw4IyOiYp+GAVEl4KgoNFrnV6Bd80o8o9QXBVpFz3sxo1FQWMlvrCUtCIGGL5bZd1xUsRoipXmMwwObQUYuI+TAAdMgiWFEWq1SPlT+XQAW/BAQvGRVrVo09f5dAx96Ww27kC1wGnwSP9lUO57yGiLuq0UZ0ajU67rg4f3Sj/YnwCaMoZG6wUcdI+r41otBb8dta7qULHkD+3PdrctBwJiVztsAtu5Uppd8EaKex+lQiSGTg8ttdtnwyBpK+6HHElFx+VBDXlvjSiWQx9vufVdjsqoclqMf1eZdZEViPeg02W+lxqKFoMCILLKtEhQ4Kk9lLBLZms9EVTRdA6zwTBJ4f/DWatnU7o1JfJ4ZcqQkKrQUHwy13t9kvQYShvW7hWlPunolN+5Agp93ieK77VVvRLTlUtnuQ4vTwVBK+dt2qawLTqHfdYEPTItNAxI2BWe9LQ7HxVzQo0Mx9ZaGTaoBKaznYyB52DzkH/CzQ5K7SR9C27m66wdcZJZdj69ENEl+0YMzpjaBAVw5vsSTg6i6M7P+6OxWryziQzUwQP/gIkgbc/BOFjpgAAAABJRU5ErkJggg=="
                  />
                  <path
                      fill-rule="evenodd"
                      fill="rgb(0, 0, 0)"
                      d="M26.110,12.363 C27.416,13.904 28.897,15.650 28.897,19.028 C28.897,22.405 27.416,24.152 26.110,25.692 C25.748,26.119 25.113,26.168 24.692,25.802 C24.270,25.436 24.221,24.794 24.583,24.368 C25.818,22.911 26.885,21.652 26.885,19.028 C26.885,16.403 25.818,15.145 24.583,13.688 C23.276,12.147 21.795,10.400 21.795,7.023 C21.795,3.645 23.276,1.899 24.583,0.358 C24.944,-0.068 25.579,-0.117 26.001,0.249 C26.423,0.614 26.471,1.257 26.110,1.683 C24.874,3.140 23.807,4.398 23.807,7.023 C23.807,9.647 24.874,10.906 26.110,12.363 ZM20.608,12.363 C21.915,13.904 23.396,15.650 23.396,19.028 C23.396,22.405 21.915,24.152 20.608,25.692 C20.247,26.119 19.612,26.168 19.190,25.802 C18.768,25.436 18.720,24.794 19.082,24.368 C20.317,22.911 21.384,21.653 21.384,19.028 C21.384,16.403 20.317,15.145 19.082,13.688 C17.775,12.147 16.294,10.400 16.294,7.023 C16.294,3.645 17.775,1.899 19.082,0.358 C19.443,-0.068 20.078,-0.117 20.500,0.249 C20.921,0.614 20.970,1.257 20.608,1.683 C19.373,3.140 18.306,4.398 18.306,7.023 C18.306,9.647 19.373,10.906 20.608,12.363 ZM15.107,12.363 C16.414,13.904 17.894,15.650 17.894,19.028 C17.894,22.405 16.414,24.152 15.107,25.692 C14.746,26.119 14.111,26.168 13.689,25.802 C13.267,25.436 13.219,24.794 13.580,24.368 C14.816,22.911 15.883,21.653 15.883,19.028 C15.883,16.403 14.816,15.145 13.580,13.688 C12.274,12.147 10.793,10.400 10.793,7.023 C10.793,3.645 12.274,1.899 13.580,0.359 C13.942,-0.068 14.577,-0.117 14.998,0.249 C15.420,0.614 15.469,1.257 15.107,1.683 L15.107,1.683 C13.872,3.140 12.805,4.398 12.805,7.023 C12.805,9.647 13.872,10.906 15.107,12.363 Z"
                  />
                </svg>
                COMFORT</span
                        >
                    </div>
                </div>
                <span class="textgrid"
                >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
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
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="76px"
                            height="70px"
                        >
                            <path
                                fill-rule="evenodd"
                                fill="rgb(0, 0, 0)"
                                d="M71.493,35.656 L53.561,35.656 C51.106,35.656 49.115,33.665 49.115,31.210 L49.115,28.604 L42.064,35.656 L52.258,45.852 C53.995,47.590 53.995,50.403 52.258,52.141 L36.697,67.704 C34.961,69.441 32.147,69.441 30.410,67.704 C28.674,65.967 28.674,63.153 30.410,61.415 L42.828,48.996 L32.633,38.800 C30.897,37.064 30.897,34.250 32.633,32.513 L50.416,14.727 C53.231,11.909 58.007,13.965 58.007,17.870 L58.007,26.763 L71.493,26.763 C73.948,26.763 75.939,28.754 75.939,31.210 C75.939,33.665 73.948,35.656 71.493,35.656 ZM60.230,13.423 C56.547,13.423 53.561,10.437 53.561,6.753 C53.561,3.070 56.547,0.083 60.230,0.083 C63.913,0.083 66.899,3.070 66.899,6.753 C66.899,10.437 63.913,13.423 60.230,13.423 ZM42.929,15.928 L39.678,13.586 L30.028,23.237 C28.292,24.974 25.478,24.974 23.741,23.237 C22.005,21.500 22.005,18.687 23.741,16.950 L35.968,4.721 C37.466,3.223 39.810,2.990 41.578,4.165 L49.792,9.853 C48.855,10.293 47.998,10.857 47.272,11.584 L42.929,15.928 ZM17.993,28.986 L6.730,28.986 C5.501,28.986 4.507,27.992 4.507,26.763 C4.507,25.534 5.501,24.540 6.730,24.540 L17.993,24.540 C19.222,24.540 20.216,25.534 20.216,26.763 C20.216,27.992 19.222,28.986 17.993,28.986 ZM17.993,11.200 L6.730,11.200 C5.501,11.200 4.507,10.205 4.507,8.976 C4.507,7.748 5.501,6.753 6.730,6.753 L17.993,6.753 C19.222,6.753 20.216,7.748 20.216,8.976 C20.216,10.205 19.222,11.200 17.993,11.200 ZM15.770,17.870 C15.770,19.098 14.776,20.093 13.547,20.093 L2.284,20.093 C1.055,20.093 0.061,19.098 0.061,17.870 C0.061,16.641 1.055,15.647 2.284,15.647 L13.547,15.647 C14.776,15.647 15.770,16.641 15.770,17.870 ZM27.215,37.932 C27.612,39.431 28.364,40.818 29.490,41.945 L32.633,45.088 L10.021,67.704 C8.285,69.441 5.471,69.441 3.734,67.704 C1.998,65.967 1.998,63.153 3.734,61.415 L27.215,37.932 Z"
                            />
                        </svg>
                    </div>
                    <div>
              <span>
                SECURE <br />
                COSTUM FIT
              </span>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="76px"
                            height="70px"
                        >
                            <path
                                fill-rule="evenodd"
                                fill="rgb(0, 0, 0)"
                                d="M71.493,35.656 L53.561,35.656 C51.106,35.656 49.115,33.665 49.115,31.210 L49.115,28.604 L42.064,35.656 L52.258,45.852 C53.995,47.590 53.995,50.403 52.258,52.141 L36.697,67.704 C34.961,69.441 32.147,69.441 30.410,67.704 C28.674,65.967 28.674,63.153 30.410,61.415 L42.828,48.996 L32.633,38.800 C30.897,37.064 30.897,34.250 32.633,32.513 L50.416,14.727 C53.231,11.909 58.007,13.965 58.007,17.870 L58.007,26.763 L71.493,26.763 C73.948,26.763 75.939,28.754 75.939,31.210 C75.939,33.665 73.948,35.656 71.493,35.656 ZM60.230,13.423 C56.547,13.423 53.561,10.437 53.561,6.753 C53.561,3.070 56.547,0.083 60.230,0.083 C63.913,0.083 66.899,3.070 66.899,6.753 C66.899,10.437 63.913,13.423 60.230,13.423 ZM42.929,15.928 L39.678,13.586 L30.028,23.237 C28.292,24.974 25.478,24.974 23.741,23.237 C22.005,21.500 22.005,18.687 23.741,16.950 L35.968,4.721 C37.466,3.223 39.810,2.990 41.578,4.165 L49.792,9.853 C48.855,10.293 47.998,10.857 47.272,11.584 L42.929,15.928 ZM17.993,28.986 L6.730,28.986 C5.501,28.986 4.507,27.992 4.507,26.763 C4.507,25.534 5.501,24.540 6.730,24.540 L17.993,24.540 C19.222,24.540 20.216,25.534 20.216,26.763 C20.216,27.992 19.222,28.986 17.993,28.986 ZM17.993,11.200 L6.730,11.200 C5.501,11.200 4.507,10.205 4.507,8.976 C4.507,7.748 5.501,6.753 6.730,6.753 L17.993,6.753 C19.222,6.753 20.216,7.748 20.216,8.976 C20.216,10.205 19.222,11.200 17.993,11.200 ZM15.770,17.870 C15.770,19.098 14.776,20.093 13.547,20.093 L2.284,20.093 C1.055,20.093 0.061,19.098 0.061,17.870 C0.061,16.641 1.055,15.647 2.284,15.647 L13.547,15.647 C14.776,15.647 15.770,16.641 15.770,17.870 ZM27.215,37.932 C27.612,39.431 28.364,40.818 29.490,41.945 L32.633,45.088 L10.021,67.704 C8.285,69.441 5.471,69.441 3.734,67.704 C1.998,65.967 1.998,63.153 3.734,61.415 L27.215,37.932 Z"
                            />
                        </svg>
                    </div>
                    <div>
              <span>
                MADE <br />
                IN THE USA
              </span>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="76px"
                            height="70px"
                        >
                            <path
                                fill-rule="evenodd"
                                fill="rgb(0, 0, 0)"
                                d="M71.493,35.656 L53.561,35.656 C51.106,35.656 49.115,33.665 49.115,31.210 L49.115,28.604 L42.064,35.656 L52.258,45.852 C53.995,47.590 53.995,50.403 52.258,52.141 L36.697,67.704 C34.961,69.441 32.147,69.441 30.410,67.704 C28.674,65.967 28.674,63.153 30.410,61.415 L42.828,48.996 L32.633,38.800 C30.897,37.064 30.897,34.250 32.633,32.513 L50.416,14.727 C53.231,11.909 58.007,13.965 58.007,17.870 L58.007,26.763 L71.493,26.763 C73.948,26.763 75.939,28.754 75.939,31.210 C75.939,33.665 73.948,35.656 71.493,35.656 ZM60.230,13.423 C56.547,13.423 53.561,10.437 53.561,6.753 C53.561,3.070 56.547,0.083 60.230,0.083 C63.913,0.083 66.899,3.070 66.899,6.753 C66.899,10.437 63.913,13.423 60.230,13.423 ZM42.929,15.928 L39.678,13.586 L30.028,23.237 C28.292,24.974 25.478,24.974 23.741,23.237 C22.005,21.500 22.005,18.687 23.741,16.950 L35.968,4.721 C37.466,3.223 39.810,2.990 41.578,4.165 L49.792,9.853 C48.855,10.293 47.998,10.857 47.272,11.584 L42.929,15.928 ZM17.993,28.986 L6.730,28.986 C5.501,28.986 4.507,27.992 4.507,26.763 C4.507,25.534 5.501,24.540 6.730,24.540 L17.993,24.540 C19.222,24.540 20.216,25.534 20.216,26.763 C20.216,27.992 19.222,28.986 17.993,28.986 ZM17.993,11.200 L6.730,11.200 C5.501,11.200 4.507,10.205 4.507,8.976 C4.507,7.748 5.501,6.753 6.730,6.753 L17.993,6.753 C19.222,6.753 20.216,7.748 20.216,8.976 C20.216,10.205 19.222,11.200 17.993,11.200 ZM15.770,17.870 C15.770,19.098 14.776,20.093 13.547,20.093 L2.284,20.093 C1.055,20.093 0.061,19.098 0.061,17.870 C0.061,16.641 1.055,15.647 2.284,15.647 L13.547,15.647 C14.776,15.647 15.770,16.641 15.770,17.870 ZM27.215,37.932 C27.612,39.431 28.364,40.818 29.490,41.945 L32.633,45.088 L10.021,67.704 C8.285,69.441 5.471,69.441 3.734,67.704 C1.998,65.967 1.998,63.153 3.734,61.415 L27.215,37.932 Z"
                            />
                        </svg>
                    </div>
                </div>
                <span class="textgrid"
                >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
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
        <h1>Tending Now</h1>
        <div
            class="produitslider"
            data-slick='{"slidesToShow": 3, "slidesToScroll": 1}'>
            @isset($falshsales)
                @foreach($falshsales as $product)
                    <div class="produit">
                        <div class="imageproduit">
                            <img src="images/produit1.jpg" alt="" />
                        </div>
                        <div class="details">
                            <h6>{{$product->title}}</h6>
                            <span>{{$product->description}} <br /></span>
                            <span>{{$product->price}} $ </span>
                        </div>
                    </div>
                @endforeach
            @endisset
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

        function addtocart() {

        }


    </script>
@endsection
