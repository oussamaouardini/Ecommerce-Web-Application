<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/infos.css')}}">
    <link rel="stylesheet" href="{{asset('css/Shipping.css')}}">
    <link rel="stylesheet" href="{{asset('css/card.css')}}">
    <link rel="stylesheet" href="{{asset('css/produit.css')}}">
    {{--    navbar shit--}}
    <link rel="stylesheet" type="text/css" href="{{asset("css/default.css")}}">

    <script src="{{asset("js/modernizr.custom.js")}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick.css')}}" />
    <script src = "{{asset('js/bootstrap.js')}}"></script>

    <link rel="stylesheet" href="{{asset('css/produits.css')}}">
    <script>

        $(document).ready(function(){
            console.log("ready");
            const $input = document.querySelector("#Qteproduct");
            const BIRTHNUMBER_ALLOWED_CHARS_REGEXP = /[0-9]+/;
            $input.addEventListener("keypress", event => {
                if (!BIRTHNUMBER_ALLOWED_CHARS_REGEXP.test(event.key)) {
                    event.preventDefault();
                    console.log("prevent") ;
                }
            });
        });


        function addnumb() {
            const input = document.querySelector("#Qteproduct");
            const BIRTHNUMBER_ALLOWED_CHARS_REGEXP = /[0-9]+/;

            if( Number.isInteger(parseInt(input.value.toString()))){
            }else{
                document.getElementById("Qteproduct").value = "0";
            }
        }


    </script>


<!-- shop   -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="{{asset("fonts/icomoon/style.css")}}">

    <link rel="stylesheet" href="{{asset("css/shop/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/shop/magnific-popup.css")}}">
    <link rel="stylesheet" href="{{asset("css/shop/jquery-ui.css")}}">
    <link rel="stylesheet" href="{{asset("css/shop/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/shop/owl.theme.default.min.css")}}">


    <link rel="stylesheet" href="{{asset("css/shop/aos.css")}}">

    <link rel="stylesheet" href="{{asset("css/shop/style.css")}}">


    <link rel="stylesheet" href="{{asset("css/nav.css")}}">
    <link rel="stylesheet" href="{{asset("css/classy-nav.css")}}">

    {{--    new Css is here--}}
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("css/newCss/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/newCss/themify-icons.css")}}" type="text/css">
    <link rel="stylesheet" href="{{asset("css/newCss/elegant-icons.css")}}">
    <link rel="stylesheet" href="{{asset("css/newCss/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/newCss/nice-select.css")}}">
    <link rel="stylesheet" href="{{asset("css/newCss/jquery-ui.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/newCss/slicknav.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("css/component.css")}}">
    <link rel="stylesheet" href="{{asset('css/Home.css')}}" />
    <link rel="stylesheet" href="{{asset("css/newCss/newTmpl.css")}}">
    {{--    new Css is here--}}

    <link href="https://fonts.googleapis.com/css?family=Anton|Exo+2|Poppins&display=swap" rel="stylesheet">
    <title>Home</title>
</head>
<body>
{{--new navbar--}}
<div class="bigNavBar" id = "bigNavBar">
    <div id="topnav" class="d-flex justify-content-between">
        <div class="lang lang1">
            <img src="{{asset('images/EN.png')}}" alt="ENG">
            <span>English</span>
        </div>
        <div class="contact">
            FREE Staff Support on orders within te US over +(212) 567 498 409
        </div>

        <div class="contact">
            @guest
               <h5 style="display: inline"> <a href="/newlogin">{{ __('Login') }}   </a></h5>
            @else
                <li class=" dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Edit informations</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </div>

        <div class="lang lang2">
            <span>French </span>
            <img src="{{asset('images/FR.png')}}" alt="FR">
        </div>
    </div>

    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="/principal">
                            <img src="{{asset('images/logo.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="advanced-search">
                        <button type="button" class="category-btn">All Categories</button>
                        <form action="#" class="input-group">
                            <input type="text" id="larecherche" placeholder="What do you need?">
                            <button type="button"  style="right: -2px; padding-bottom: 15px; padding-top: 16px;"><i class="ti-search" onclick="myFunction()"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 text-right col-md-3">
                    <ul class="nav-right">
                        <li class="heart-icon"><a href="#">
                                <i class="icon_heart_alt"></i>
                                @isset($nbcartitems)
                                    <span> {{$nbcartitems}}</span>
                                @endisset
                            </a>
                        </li>
                        <li class="cart-icon"><a href="#">
                                <i class="icon_bag_alt"></i>
                                @isset($nbcartitems)
                                    <span> {{$nbcartitems}} </span>
                                @endisset
                            </a>
                            @isset($cart_items)
                            <div class="cart-hover">
                                <div class="select-items">
                                    <table id = "cardTable">
                                        <tbody>

                                        @foreach($cart_items as $cart_item)

                                        <tr>
                                            <td class="si-pic"><img src="images/img/select-product-1.jpg" alt=""></td>
                                            <td class="si-text">
                                                <div class="product-selected">
                                                    <p>$ {{$cart_item['product']->price}} x {{ (int)$cart_item['quantity'] }}</p>
                                                    <h6>Kabino Bedside Table</h6>
                                                </div>
                                            </td>
                                            <!--
                                            <td class="si-close">
                                                <i class="ti-close"></i>
                                            </td>
                                            -->
                                        </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <div class="select-total">
                                    <span>total:</span>
                                    @isset($total)
                                    <h5>${{$total}}</h5>
                                    @endisset
                                </div>
                                <div class="select-button">
                                    <a href="#" class="primary-btn view-card">VIEW CARD</a>
                                    <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                                </div>
                            </div>
                        </li>
                        @endisset
                        <li class="cart-price">@isset($total)
                                <h5>${{$total}}</h5>
                            @endisset</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="centered">
        <nav id="cbp-hrmenu" class="cbp-hrmenu ">
            <ul>
                <li>
                    <a href="#" class = "exo">PANTS</a>
                    <div class="cbp-hrsub">
                        <div class="cbp-hrsub-inner">
                            <div>
                                <h4 class = "titles">MEN</h4>
                                <ul>
                                    <li class ="subTitles" ><a href="/shopFinal/menpants?brand=adidas">Adidas</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/menpants?brand=Nike">Nike</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/menpants?brand=Puma">Puma</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/menpants?brand=Reebok">Reabook</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/menpants?brand=NewBalance">New Balance</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/menpants?brand=Balenciaga">Balenciaga</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class = "titles">WOMEN</h4>
                                <ul>
                                    <li class ="subTitles" ><a href="/shopFinal/womenPants?brand=adidas">Adidas</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/womenPants?brand=Nike">Nike</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/womenPants?brand=Puma">Puma</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/womenPants?brand=Reebok">Reabook</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/womenPants?brand=NewBalance">New Balance</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/womenPants?brand=Balenciaga">Balenciaga</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class = "titles">Kids</h4>
                                <ul>
                                    <li class ="subTitles" ><a href="/shopFinal/childPants?brand=adidas">Adidas</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/childPants?brand=Nike">Nike</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/childPants?brand=Puma">Puma</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/childPants?brand=Reebok">Reabook</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/childPants?brand=NewBalance">New Balance</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/childPants?brand=Balenciaga">Balenciaga</a></li>
                                </ul>
                            </div>
                        </div><!-- /cbp-hrsub-inner -->
                    </div><!-- /cbp-hrsub -->
                </li>
                <li>
                    <a href="#" class = "exo">SNEAKERS</a>
                    <div class="cbp-hrsub">
                        <div class="cbp-hrsub-inner">
                            <div>
                                <h4 class = "titles">MEN</h4>
                                <ul>
                                    <li class ="subTitles" ><a href="/shopFinal/menSneakers?brand=adidas">Adidas</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/menSneakers?brand=Nike">Nike</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/menSneakers?brand=Puma">Puma</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/menSneakers?brand=Reebok">Reabook</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/menSneakers?brand=NewBalance">New Balance</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/menSneakers?brand=Balenciaga">Balenciaga</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class = "titles">WOMEN</h4>
                                <ul>
                                    <li class ="subTitles" ><a href="/shopFinal/womenSneakers?brand=adidas">Adidas</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/womenSneakers?brand=Nike">Nike</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/womenSneakers?brand=Puma">Puma</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/womenSneakers?brand=Reebok">Reabook</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/womenSneakers?brand=NewBalance">New Balance</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/womenSneakers?brand=Balenciaga">Balenciaga</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class = "titles">Kids</h4>
                                <ul>
                                    <li class ="subTitles" ><a href="/shopFinal/childSneakers?brand=adidas">Adidas</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/childSneakers?brand=Nike">Nike</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/childSneakers?brand=Puma">Puma</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/childSneakers?brand=Reebok">Reabook</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/childSneakers?brand=NewBalance">New Balance</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/childSneakers?brand=Balenciaga">Balenciaga</a></li>
                                </ul>
                            </div>
                        </div><!-- /cbp-hrsub-inner -->
                    </div><!-- /cbp-hrsub -->
                </li>
                <li>
                    <a href="#" class = "exo">SHIRTS</a>
                    <div class="cbp-hrsub">
                        <div class="cbp-hrsub-inner">
                            <div>
                                <h4 class = "titles">MEN</h4>
                                <ul>
                                    <li class ="subTitles" ><a href="/shopFinal/menT-Shirts?brand=adidas">Adidas</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/menT-Shirts?brand=Nike">Nike</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/menT-Shirts?brand=Puma">Puma</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/menT-Shirts?brand=Reebok">Reabook</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/menT-Shirts?brand=NewBalance">New Balance</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/menT-Shirts?brand=Balenciaga">Balenciaga</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class = "titles">WOMEN</h4>
                                <ul>
                                    <li class ="subTitles" ><a href="/shopFinal/womenT-Shirts?brand=adidas">Adidas</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/womenT-Shirts?brand=Nike">Nike</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/womenT-Shirts?brand=Puma">Puma</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/womenT-Shirts?brand=Reebok">Reabook</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/womenT-Shirts?brand=NewBalance">New Balance</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/womenT-Shirts?brand=Balenciaga">Balenciaga</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class = "titles">Kids</h4>
                                <ul>
                                    <li class ="subTitles" ><a href="/shopFinal/childT-Shirts?brand=adidas">Adidas</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/childT-Shirts?brand=Nike">Nike</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/childT-Shirts?brand=Puma">Puma</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/childT-Shirts?brand=Reebok">Reabook</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/childT-Shirts?brand=NewBalance">New Balance</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/childT-Shirts?brand=Balenciaga">Balenciaga</a></li>
                                </ul>
                            </div>
                        </div><!-- /cbp-hrsub-inner -->
                    </div><!-- /cbp-hrsub -->
                </li>
                <li>
                    <a href="#" class = "exo">FOOTWAR</a>
                    <div class="cbp-hrsub">
                        <div class="cbp-hrsub-inner">
                            <div>
                                <h4 class = "titles">MEN</h4>
                                <ul>
                                    <li class ="subTitles" ><a href="/shopFinal/menFootwar?brand=adidas">Adidas</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/menFootwar?brand=Nike">Nike</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/menFootwar?brand=Puma">Puma</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/menFootwar?brand=Reebok">Reabook</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/menFootwar?brand=NewBalance">New Balance</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/menFootwar?brand=Balenciaga">Balenciaga</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class = "titles">WOMEN</h4>
                                <ul>
                                    <li class ="subTitles" ><a href="/shopFinal/womenFootwar?brand=adidas">Adidas</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/womenFootwar?brand=Nike">Nike</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/womenFootwar?brand=Puma">Puma</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/womenFootwar?brand=Reebok">Reabook</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/womenFootwar?brand=NewBalance">New Balance</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/womenFootwar?brand=Balenciaga">Balenciaga</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class = "titles">Kids</h4>
                                <ul>
                                    <li class ="subTitles" ><a href="/shopFinal/childFootwar?brand=adidas">Adidas</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/childFootwar?brand=Nike">Nike</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/childFootwar?brand=Puma">Puma</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/childFootwar?brand=Reebok">Reabook</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/childFootwar?brand=NewBalance">New Balance</a></li>
                                    <li class ="subTitles" ><a href="/shopFinal/childFootwar?brand=Balenciaga">Balenciaga</a></li>
                                </ul>
                            </div>
                        </div><!-- /cbp-hrsub-inner -->
                    </div><!-- /cbp-hrsub -->
                </li>
                <li>
                    <a href="/shopFinal" class = "exo">SHOP</a>
                </li>
                <li>
                    <a href="{{ url('/newlogin') }}" class = "exo">LOGIN</a>
                </li>
                <div id="carddiv">
                    <div id="card" style="top: 0px;">
                        <div>
                            <h2>CART</h2>
                            <div id="close"><span></span> <span></span></div>
                        </div>
                        @isset($cart_items)
                            <div class="cardproduct">
                                products in your cart
                            </div>


                            @foreach($cart_items as $cart_item)
                            <!-- product -->
                                <div id="listprod">
                                    <div class="produitcard">
                                        <div class="prodimg">
                                            <img src="images/produitcard.png" alt="" />
                                        </div>

                                        <div class="detailcard">
                                    <span>
                                      {{$cart_item['product']->title}}
                                    </span>
                                            <div class="prixunites">
                                                <span>{{$cart_item['product']->price}} </span> <span>$49.99</span>
                                            </div>
                                        </div>
                                        <!--
                                        <div class="removeccard">
                                            <span></span>
                                            <span></span>
                                        </div>
                                        -->
                                    </div>
                                </div>

                            @endforeach
                        @endisset

                        @isset($total)
                            <div id="total">
                                <h2>Total : $<span>{{$total}}</span></h2>
                                <span> Shipping & taxes calculated at checkout</span>
                            </div>

                            <div id="payment">
                                <div>
                                    <div id="editcard">
                                        EDIT CARD
                                    </div>
                                    <div id="checkout">
                                        CHECKOUT
                                    </div>
                                </div>
                                <div>
                                    <div id="paypal">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="115px"
                                            height="29px"
                                        >
                                            <image
                                                x="80px"
                                                y="7px"
                                                width="16px"
                                                height="18px"
                                                xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAMAAABl5a5YAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAA9lBMVEUTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtYTmtb///9vfBnCAAAAUHRSTlMAcOzy7/Du1Z9FDbvrggkdzPtOLd/lvO2RSvZmBxPQnGP+M3iL3SOFYKSyAQMw2OoqELjJbXuS2Zgf2iY9v1rT1l4VdfdNFBEIo9zBsZDXPB+jn4kAAAABYktHRFGUaXwqAAAAB3RJTUUH5AEXEQsj7djUXAAAALVJREFUGNNNjtcWgkAQQ4MNK4Jd7F0s2HtDxd74/69x1gfZvCS5Z3dmAAgOp4vk9oheH0j+gPVXMCQBYdkGlhIBojEK8YSc/JEUkFYtS81kc748AwWgWKK/ZRpWYaAKhMhqdQINBpqQNLJWG52uTqHXx2BIPhpPpjP2YC5hseS2iitgrdh9w2ZvWertREPW9gd2+ZG6ecodzpcrfroRuGdh60Hg2eYA2/7iOkwCAg+Mt/7+cP0LS84u26WYoMcAAAAASUVORK5CYII="
                                            />
                                            <image
                                                x="33px"
                                                y="7px"
                                                width="31px"
                                                height="18px"
                                                xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB8AAAASCAMAAACU7vXVAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABm1BMVEUmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4AmO4D////atCs2AAAAh3RSTlMACZry8O/q0TUp3+RcOeEbT/6/0O1OAX30XgoWSFoIoukto/pJL1BUKAYfHgUPttQOwusgLKDcbYPW2XatBFn2uuD7njbKdXsu/edwTPmmC7Tab0qoR3GfFzo4kOLTvZaPgnjOHQyrE2KGsSLXi5008YCVVRxExFM9983J9VaOQ92qEXlkURXrEghKAAAAAWJLR0SIa2YWWgAAAAd0SU1FB+QBFxELI+3Y1FwAAAFhSURBVCjPZZFXV8JAEIWHJkWNxooNFRAkFhArEUTAhh3BhmIBFUXsBUXF7v5tZyMn8cA+7N653yaZmwEAmVyhVOFSlqjlGiheWh0RV2lZMS9XSZwwFUW8Em2WqaquoZytLcR19WjrGxqbmhnKWwq5oRXttnZURhQmM4oOi9XSCTaO6+oG6OlF2+7AF/WhcPbDwCCj0CuGhkdcdn4UgHOh7QbwjHlRjIPZ99ep34RbAGDCiefk1HRAiGGdoTg4m880BzC/8C/e4tIy7qEVTThCH2dXAdYkyq5vbAYJ0UWxRxm9qNKAZ4uS7ZgrtrMbNsAeFvtCrjhLSOIADo/QSWiTyaQDw4Abq2OBn6BKOeA0jadR/BsprM6EqVD/3AYXl3heifyazuCGu727p5+NA2SwIZIR+YMfy8fs0zPFwReAHBVRaRq5fBYfxva+IufTb+8f0jhkn2o+zWe/vp9CvsgP/AJCt4wlc+3X2wAAAABJRU5ErkJggg=="
                                            />
                                            <image
                                                x="0px"
                                                y="0px"
                                                width="115px"
                                                height="29px"
                                                xlink:href="data:img/png;base64,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"
                                            />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                        @endisset

                        @isset($login)
                            <div id="total">
                                <h2><span>  Sorry You are not logged in </span></h2>
                            </div>

                            <div class="row">
                                <a href="#">Log In</a>
                                <a href="#">Sign Up</a>
                            </div>
                        @endisset

                    </div>
                </div>
            </ul>
        </nav>
    </div>

</div>
{{--new navbar--}}
    <div class="content">
        @yield('content')
        <!-- Partner Logo Section Begin -->
            <div class="partner-logo">
                <div class="container">
                    <div class="logo-carousel owl-carousel">
                        <div class="logo-item">
                            <div class="tablecell-inner">
                                <img src="images/img/logo-carousel/logo-1.png" alt="">
                            </div>
                        </div>
                        <div class="logo-item">
                            <div class="tablecell-inner">
                                <img src="images/img/logo-carousel/logo-2.png" alt="">
                            </div>
                        </div>
                        <div class="logo-item">
                            <div class="tablecell-inner">
                                <img src="images/img/logo-carousel/logo-3.png" alt="">
                            </div>
                        </div>
                        <div class="logo-item">
                            <div class="tablecell-inner">
                                <img src="images/img/logo-carousel/logo-4.png" alt="">
                            </div>
                        </div>
                        <div class="logo-item">
                            <div class="tablecell-inner">
                                <img src="images/img/logo-carousel/logo-5.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Partner Logo Section End -->

            <!-- Footer Section Begin -->
            <footer class="footer-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="footer-left">
                                <div class="footer-logo">
                                    <a href="#"><img src="images/img/footer-logo.png" alt=""></a>
                                </div>
                                <ul>
                                    <li>Address: 60-49 Road 11378 New York</li>
                                    <li>Phone: +65 11.188.888</li>
                                    <li>Email: hello.colorlib@gmail.com</li>
                                </ul>
                                <div class="footer-social">
                                    <a href="#" style="padding-top: 10px;"><i class="fa fa-facebook"></i></a>
                                    <a href="#" style="padding-top: 10px;"><i class="fa fa-instagram"></i></a>
                                    <a href="#" style="padding-top: 10px;"><i class="fa fa-twitter"></i></a>
                                    <a href="#" style="padding-top: 10px;"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 offset-lg-1">
                            <div class="footer-widget">
                                <h5>Information</h5>
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Checkout</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Serivius</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="footer-widget">
                                <h5>My Account</h5>
                                <ul>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Shopping Cart</a></li>
                                    <li><a href="#">Shop</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="newslatter-item">
                                <h5>Join Our Newsletter Now</h5>
                                <p>Get E-mail updates about our latest shop and special offers.</p>
                                <form action="#" class="subscribe-form">
                                    <input type="text" placeholder="Enter Your Mail">
                                    <button type="button">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright-reserved">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="copyright-text">
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Store is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Bingo - Team</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </div>
                                <div class="payment-pic">
                                    <img src="images/img/payment-method.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer Section End -->
    </div>
    <!-- New JS -->


    <script src="{{asset('js/newJs/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/newJs/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/newJs/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/newJs/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('js/newJs/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('js/newJs/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('js/newJs/jquery.dd.min.js')}}"></script>
    <script src="{{asset('js/newJs/jquery.slicknav.js')}}"></script>
    <script src="{{asset('js/newJs/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/home.js')}}"></script>
    <script src="{{asset('js/newJs/main.js')}}"></script>
    <script src="{{asset('js/cbpHorizontalMenu.min.js')}}"></script>

    <script src="{{asset('js/home.js')}}"></script>
    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('js/active.js')}}"></script>
    <!-- Live Chat Code :: Start of Tawk.to Script -->
    <script src="{{asset('js/slick.js')}}"></script>
<script>
    $(function() {
        cbpHorizontalMenu.init();
    });
    function myFunction() {
        var val = document.getElementById("larecherche");
        if(val.value === ""){
        }else{
            window.location.pathname = '/shopFinal/search/'+val.value ;
        }
    }
</script>
</body>
</html>
