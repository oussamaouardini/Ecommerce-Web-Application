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
    <link rel="stylesheet" type="text/css" href="{{asset("css/component.css")}}">
    <script src="{{asset("js/modernizr.custom.js")}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick.css')}}" />
    <script src = "{{asset('js/bootstrap.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/Home.css')}}" />
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

{{--    <script src="{{asset("js/shop/bootstrap.min.js")}}"></script>--}}
{{--    <script src="{{asset("js/shop/owl.carousel.min.js")}}"></script>--}}
{{--    <script src="{{asset("js/shop/jquery.magnific-popup.min.js")}}"></script>--}}
{{--    <script src="{{asset("js/shop/aos.js")}}"></script>--}}
{{--    <script src="{{asset("js/shop/main.js")}}"></script>--}}

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
        <div class="lang lang2">
            <span>French </span>
            <img src="{{asset('images/FR.png')}}" alt="FR">
        </div>
    </div>
    <nav id="cbp-hrmenu" class="cbp-hrmenu ">
        <ul style="margin-right: 0px;">
            <li>
                <a href="#" class = "exo">SHIRTS</a>
                <div class="cbp-hrsub">
                    <div class="cbp-hrsub-inner">
                        <div>
                            <h4 class = "titles">MEN</h4>
                            <ul>
                                <li class ="subTitles" ><a href="#">Adidas</a></li>
                                <li class ="subTitles" ><a href="#">Nike</a></li>
                                <li class ="subTitles" ><a href="#">Puma</a></li>
                                <li class ="subTitles" ><a href="#">Reabook</a></li>
                                <li class ="subTitles" ><a href="#">New Balance</a></li>
                                <li class ="subTitles" ><a href="#">Balenciaga</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 class = "titles">WOMEN</h4>
                            <ul>
                                <li class ="subTitles" ><a href="#">Adidas</a></li>
                                <li class ="subTitles" ><a href="#">Nike</a></li>
                                <li class ="subTitles" ><a href="#">Puma</a></li>
                                <li class ="subTitles" ><a href="#">Reabook</a></li>
                                <li class ="subTitles" ><a href="#">New Balance</a></li>
                                <li class ="subTitles" ><a href="#">Balenciaga</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 class = "titles">Kids</h4>
                            <ul>
                                <li class ="subTitles" ><a href="#">Adidas</a></li>
                                <li class ="subTitles" ><a href="#">Nike</a></li>
                                <li class ="subTitles" ><a href="#">Puma</a></li>
                                <li class ="subTitles" ><a href="#">Reabook</a></li>
                                <li class ="subTitles" ><a href="#">New Balance</a></li>
                                <li class ="subTitles" ><a href="#">Balenciaga</a></li>
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
                                <li class ="subTitles" ><a href="#">Adidas</a></li>
                                <li class ="subTitles" ><a href="#">Nike</a></li>
                                <li class ="subTitles" ><a href="#">Puma</a></li>
                                <li class ="subTitles" ><a href="#">Reabook</a></li>
                                <li class ="subTitles" ><a href="#">New Balance</a></li>
                                <li class ="subTitles" ><a href="#">Balenciaga</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 class = "titles">WOMEN</h4>
                            <ul>
                                <li class ="subTitles" ><a href="#">Adidas</a></li>
                                <li class ="subTitles" ><a href="#">Nike</a></li>
                                <li class ="subTitles" ><a href="#">Puma</a></li>
                                <li class ="subTitles" ><a href="#">Reabook</a></li>
                                <li class ="subTitles" ><a href="#">New Balance</a></li>
                                <li class ="subTitles" ><a href="#">Balenciaga</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 class = "titles">Kids</h4>
                            <ul>
                                <li class ="subTitles" ><a href="#">Adidas</a></li>
                                <li class ="subTitles" ><a href="#">Nike</a></li>
                                <li class ="subTitles" ><a href="#">Puma</a></li>
                                <li class ="subTitles" ><a href="#">Reabook</a></li>
                                <li class ="subTitles" ><a href="#">New Balance</a></li>
                                <li class ="subTitles" ><a href="#">Balenciaga</a></li>
                            </ul>
                        </div>
                    </div><!-- /cbp-hrsub-inner -->
                </div><!-- /cbp-hrsub -->
            </li>
            <li>
                <a href="#" class = "exo">PANTS</a>
                <div class="cbp-hrsub">
                    <div class="cbp-hrsub-inner">
                        <div>
                            <h4 class = "titles">MEN</h4>
                            <ul>
                                <li class ="subTitles" ><a href="#">Adidas</a></li>
                                <li class ="subTitles" ><a href="#">Nike</a></li>
                                <li class ="subTitles" ><a href="#">Puma</a></li>
                                <li class ="subTitles" ><a href="#">Reabook</a></li>
                                <li class ="subTitles" ><a href="#">New Balance</a></li>
                                <li class ="subTitles" ><a href="#">Balenciaga</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 class = "titles">WOMEN</h4>
                            <ul>
                                <li class ="subTitles" ><a href="#">Adidas</a></li>
                                <li class ="subTitles" ><a href="#">Nike</a></li>
                                <li class ="subTitles" ><a href="#">Puma</a></li>
                                <li class ="subTitles" ><a href="#">Reabook</a></li>
                                <li class ="subTitles" ><a href="#">New Balance</a></li>
                                <li class ="subTitles" ><a href="#">Balenciaga</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 class = "titles">Kids</h4>
                            <ul>
                                <li class ="subTitles" ><a href="#">Adidas</a></li>
                                <li class ="subTitles" ><a href="#">Nike</a></li>
                                <li class ="subTitles" ><a href="#">Puma</a></li>
                                <li class ="subTitles" ><a href="#">Reabook</a></li>
                                <li class ="subTitles" ><a href="#">New Balance</a></li>
                                <li class ="subTitles" ><a href="#">Balenciaga</a></li>
                            </ul>
                        </div>
                    </div><!-- /cbp-hrsub-inner -->
                </div><!-- /cbp-hrsub -->
            </li>
            <li>
                <a href="#" class = "exo">HOODIES</a>
                <div class="cbp-hrsub">
                    <div class="cbp-hrsub-inner">
                        <div>
                            <h4 class = "titles">MEN</h4>
                            <ul>
                                <li class ="subTitles" ><a href="#">Adidas</a></li>
                                <li class ="subTitles" ><a href="#">Nike</a></li>
                                <li class ="subTitles" ><a href="#">Puma</a></li>
                                <li class ="subTitles" ><a href="#">Reabook</a></li>
                                <li class ="subTitles" ><a href="#">New Balance</a></li>
                                <li class ="subTitles" ><a href="#">Balenciaga</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 class = "titles">WOMEN</h4>
                            <ul>
                                <li class ="subTitles" ><a href="#">Adidas</a></li>
                                <li class ="subTitles" ><a href="#">Nike</a></li>
                                <li class ="subTitles" ><a href="#">Puma</a></li>
                                <li class ="subTitles" ><a href="#">Reabook</a></li>
                                <li class ="subTitles" ><a href="#">New Balance</a></li>
                                <li class ="subTitles" ><a href="#">Balenciaga</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 class = "titles">Kids</h4>
                            <ul>
                                <li class ="subTitles" ><a href="#">Adidas</a></li>
                                <li class ="subTitles" ><a href="#">Nike</a></li>
                                <li class ="subTitles" ><a href="#">Puma</a></li>
                                <li class ="subTitles" ><a href="#">Reabook</a></li>
                                <li class ="subTitles" ><a href="#">New Balance</a></li>
                                <li class ="subTitles" ><a href="#">Balenciaga</a></li>
                            </ul>
                        </div>
                    </div><!-- /cbp-hrsub-inner -->
                </div><!-- /cbp-hrsub -->
            </li>
            <li>
                <a href="#" class = "exo">HOODIES</a>
                <div class="cbp-hrsub">
                    <div class="cbp-hrsub-inner">
                        <div>
                            <h4 class = "titles">MEN</h4>
                            <ul>
                                <li class ="subTitles" ><a href="#">Adidas</a></li>
                                <li class ="subTitles" ><a href="#">Nike</a></li>
                                <li class ="subTitles" ><a href="#">Puma</a></li>
                                <li class ="subTitles" ><a href="#">Reabook</a></li>
                                <li class ="subTitles" ><a href="#">New Balance</a></li>
                                <li class ="subTitles" ><a href="#">Balenciaga</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 class = "titles">WOMEN</h4>
                            <ul>
                                <li class ="subTitles" ><a href="#">Adidas</a></li>
                                <li class ="subTitles" ><a href="#">Nike</a></li>
                                <li class ="subTitles" ><a href="#">Puma</a></li>
                                <li class ="subTitles" ><a href="#">Reabook</a></li>
                                <li class ="subTitles" ><a href="#">New Balance</a></li>
                                <li class ="subTitles" ><a href="#">Balenciaga</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 class = "titles">Kids</h4>
                            <ul>
                                <li class ="subTitles" ><a href="#">Adidas</a></li>
                                <li class ="subTitles" ><a href="#">Nike</a></li>
                                <li class ="subTitles" ><a href="#">Puma</a></li>
                                <li class ="subTitles" ><a href="#">Reabook</a></li>
                                <li class ="subTitles" ><a href="#">New Balance</a></li>
                                <li class ="subTitles" ><a href="#">Balenciaga</a></li>
                            </ul>
                        </div>
                    </div><!-- /cbp-hrsub-inner -->
                </div><!-- /cbp-hrsub -->
            </li>
            <li class="exo " id="searchli" style = "margin-right : 10px;width:28px;">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="28px"
                    height="28px"
                >
                    <path
                        fill-rule="evenodd"
                        fill="rgb(0, 0, 0)"
                        d="M27.224,27.034 L19.434,18.911 C21.421,16.914 22.652,14.160 22.652,11.122 C22.652,5.035 17.713,0.084 11.642,0.084 C5.571,0.084 0.633,5.035 0.633,11.122 C0.633,17.208 5.571,22.160 11.642,22.160 C14.307,22.160 16.753,21.205 18.659,19.620 L26.468,27.762 C26.571,27.870 26.708,27.924 26.846,27.924 C26.977,27.924 27.108,27.875 27.209,27.777 C27.418,27.575 27.424,27.243 27.224,27.034 ZM11.642,21.109 C6.150,21.109 1.681,16.629 1.681,11.122 C1.681,5.615 6.150,1.135 11.642,1.135 C17.135,1.135 21.603,5.615 21.603,11.122 C21.603,16.629 17.135,21.109 11.642,21.109 Z"
                    />
                </svg>
            </li>
            <li class="exo " style="width: 28px;">
                <div id="panier">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="28px"
                        height="28px"
                    >
                        <path
                            fill-rule="evenodd"
                            fill="rgb(0, 0, 0)"
                            d="M27.390,5.379 C26.888,4.767 26.126,4.426 25.335,4.426 L8.169,4.426 C7.679,4.426 7.211,4.564 6.807,4.813 L5.929,1.746 C5.785,1.243 5.329,0.897 4.809,0.897 L3.475,0.897 L0.929,0.897 C0.444,0.897 0.046,1.290 0.046,1.781 L0.046,1.873 C0.046,2.358 0.438,2.757 0.929,2.757 L4.266,2.757 L5.970,8.781 L8.314,17.092 C6.980,17.427 5.993,18.634 5.993,20.067 C5.993,21.690 7.257,23.024 8.856,23.128 C8.724,23.509 8.660,23.931 8.695,24.364 C8.810,25.831 10.005,27.015 11.472,27.113 C13.221,27.234 14.682,25.842 14.682,24.121 C14.682,23.775 14.625,23.446 14.515,23.134 L18.025,23.134 C17.881,23.544 17.823,24.000 17.875,24.468 C18.037,25.889 19.209,27.009 20.641,27.113 C22.390,27.234 23.857,25.848 23.857,24.121 C23.857,22.452 22.471,21.118 20.808,21.118 L9.082,21.118 C8.510,21.118 8.025,20.673 8.002,20.107 C7.979,19.507 8.458,19.016 9.053,19.016 L10.814,19.016 L20.358,19.016 L23.043,19.016 C24.232,19.016 25.271,18.201 25.560,17.046 L27.893,7.655 C28.095,6.846 27.910,6.020 27.390,5.379 ZM20.860,23.128 C21.403,23.128 21.847,23.572 21.847,24.115 C21.847,24.658 21.403,25.103 20.860,25.103 C20.317,25.103 19.873,24.658 19.873,24.115 C19.873,23.572 20.312,23.128 20.860,23.128 ZM11.686,23.128 C12.228,23.128 12.673,23.572 12.673,24.115 C12.673,24.658 12.228,25.103 11.686,25.103 C11.143,25.103 10.698,24.658 10.698,24.115 C10.698,23.572 11.137,23.128 11.686,23.128 ZM8.060,8.769 L7.609,7.181 C7.540,6.938 7.638,6.760 7.707,6.673 C7.771,6.586 7.921,6.442 8.169,6.442 L10.052,6.442 L10.566,8.775 L8.060,8.775 L8.060,8.769 L8.060,8.769 ZM8.625,10.779 L11.004,10.779 L11.478,12.939 L9.232,12.939 L8.625,10.779 ZM10.814,16.994 C10.554,16.994 10.323,16.821 10.254,16.566 L9.798,14.949 L11.917,14.949 L12.367,16.988 L10.814,16.988 L10.814,16.994 L10.814,16.994 ZM15.843,16.994 L14.422,16.994 L13.972,14.955 L15.837,14.955 L15.837,16.994 L15.843,16.994 ZM15.843,12.939 L13.533,12.939 L13.060,10.779 L15.843,10.779 L15.843,12.939 ZM15.843,8.769 L12.621,8.769 L12.107,6.436 L15.843,6.436 L15.843,8.769 ZM19.446,16.994 L17.858,16.994 L17.858,14.955 L19.873,14.955 L19.446,16.994 ZM20.300,12.939 L17.858,12.939 L17.858,10.779 L20.756,10.779 L20.300,12.939 ZM17.858,8.769 L17.858,6.436 L21.668,6.436 L21.178,8.769 L17.858,8.769 ZM23.614,16.555 C23.551,16.815 23.320,17.000 23.048,17.000 L21.501,17.000 L21.934,14.961 L24.013,14.961 L23.614,16.555 ZM24.509,12.939 L22.356,12.939 L22.812,10.779 L25.046,10.779 L24.509,12.939 ZM25.941,7.158 L25.543,8.763 L23.233,8.763 L23.724,6.430 L25.375,6.430 C25.623,6.430 25.768,6.569 25.831,6.655 C25.901,6.742 26.005,6.921 25.941,7.158 Z"
                        />
                    </svg>
                    <div id="Numpanier">3</div>
                </div>
            </li>
            <div id="carddiv">
                <div id="card" style="top: 0px;">
                    <div>
                        <h2>CART</h2>
                        <div id="close"><span></span> <span></span></div>
                    </div>
                    <div class="cardproduct">
                        2 products was added to your cart
                    </div>
                    <div id="listprod">
                        <div class="produitcard">
                            <div class="prodimg">
                                <img src="images/produitcard.png" alt="" />
                            </div>
                            <div class="detailcard">
                <span>
                  ADIDAS MEN'S AC MILAN 3/4 TRAINING PANTS BLACK/CHARCOAL SOLID
                  GREY/VICTORY RED (XS)
                </span>
                                <div class="prixunites">
                                    <span>$49.99 </span> <span>$49.99</span>
                                </div>
                            </div>
                            <div class="removeccard">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="produitcard">
                            <div class="prodimg">
                                <img src="images/produitcard.png" alt="" />
                            </div>
                            <div class="detailcard">
                <span>
                  ADIDAS MEN'S AC MILAN 3/4 TRAINING PANTS BLACK/CHARCOAL SOLID
                  GREY/VICTORY RED (XS)
                </span>
                                <div class="prixunites">
                                    <span>$49.99 </span> <span>$49.99</span>
                                </div>
                            </div>
                            <div class="removeccard">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="produitcard">
                            <div class="prodimg">
                                <img src="images/produitcard.png" alt="" />
                            </div>
                            <div class="detailcard">
                <span>
                  ADIDAS MEN'S AC MILAN 3/4 TRAINING PANTS BLACK/CHARCOAL SOLID
                  GREY/VICTORY RED (XS)
                </span>
                                <div class="prixunites">
                                    <span>$49.99 </span> <span>$49.99</span>
                                </div>
                            </div>
                            <div class="removeccard">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="produitcard">
                            <div class="prodimg">
                                <img src="images/produitcard.png" alt="" />
                            </div>
                            <div class="detailcard">
                <span>
                  ADIDAS MEN'S AC MILAN 3/4 TRAINING PANTS BLACK/CHARCOAL SOLID
                  GREY/VICTORY RED (XS)
                </span>
                                <div class="prixunites">
                                    <span>$49.99 </span> <span>$49.99</span>
                                </div>
                            </div>
                            <div class="removeccard">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="produitcard">
                            <div class="prodimg">
                                <img src="images/produitcard.png" alt="" />
                            </div>
                            <div class="detailcard">
                <span>
                  ADIDAS MEN'S AC MILAN 3/4 TRAINING PANTS BLACK/CHARCOAL SOLID
                  GREY/VICTORY RED (XS)
                </span>
                                <div class="prixunites">
                                    <span>$49.99 </span> <span>$49.99</span>
                                </div>
                            </div>
                            <div class="removeccard">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="produitcard">
                            <div class="prodimg">
                                <img src="images/produitcard.png" alt="" />
                            </div>
                            <div class="detailcard">
                <span>
                  ADIDAS MEN'S AC MILAN 3/4 TRAINING PANTS BLACK/CHARCOAL SOLID
                  GREY/VICTORY RED (XS)
                </span>
                                <div class="prixunites">
                                    <span>$49.99 </span> <span>$49.99</span>
                                </div>
                            </div>
                            <div class="removeccard">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div id="total">
                        <h2>Total : $<span>99.45</span></h2>
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
                </div>
            </div>
        </ul>
    </nav>
</div>

{{--new navbar--}}
    <section>
    <div class="content">
    @yield('content')
    <div id="newsletter">
        <h1>Sign up to our newsletter</h1>
        <span
        >Sign up for offers and exclusive discounts. <br />
        Read our privacy policy.
      </span>
        <div id="email" class="form-control">
            <input type="email" placeholder="Email Address" />
            <div id="signup">SIGN UP</div>
        </div>
    </div>
    <div id="botinfos">
        <div id="info1" class="infodivs">
            <ul>
                <li class = "exo">TSHIRT</li>
                <li class = "exo">HOODIES</li>
                <li class = "exo">SNEAKERS</li>
                <li class = "exo">PAINTS</li>
                <li class = "exo">ACCESSORIES</li>
            </ul>
        </div>
        <div id="info2" class="infodivs">
            <h2>CUSTOMER SERVICE</h2>
            <ul>
                <li>Support Portal</li>
                <li>Instruction</li>
                <li>Replacements</li>
                <li>Contact Us</li>
                <div id="searchdiv">

                    <div id="search" style="top: 0px">
                        <input
                            class="form-control form-control-sm "
                            type="text"
                            placeholder="Search"
                            aria-label="Search"
                            id="Searchbar"
                        />
                        <button>Search</button>
                    </div>
                    <div>
                        <h2>CART</h2>
                        <div id="closeSearch"><span></span> <span></span></div>
                    </div>
                </div>
            </ul>

        </div>
        <div class="bigmenu">
            <div>
                <h3 class = "titles">Men</h3>
                <ul>
                    <li class = "subTitles"><a href="{{url('/products/Men\'s Sweater')}}">Men\'s Sweater</a></li>
                    <li class = "subTitles"><a href="">Men\'s Jacket</a></li>
                    <li class = "subTitles"><a href="">Men\'s Footwear</a></li>
                    <li class = "subTitles"><a href="">Men\'s Pants</a></li>
                    <li class = "subTitles"><a href="">Men\'s T-Shirts</a></li>
                    <li class = "subTitles"><a href="">Men\'s Sneakers</a></li>
                </ul>
            </div>
            <div>
                <h3 class = "titles">Women</h3>
                <ul>
                    <li class = "subTitles"><a href="">Women\'s Sweater</a></li>
                    <li class = "subTitles"><a href="">Women\'s Jacket</a></li>
                    <li class = "subTitles"><a href="">Women\'s Footwear</a></li>
                    <li class = "subTitles"><a href="">Women\'s Pants</a></li>
                    <li class = "subTitles"><a href="">Women\'s T-Shirts</a></li>
                    <li class = "subTitles"><a href="">Women\'s Sneakers</a></li>
                </ul>
            </div>
            <div>
                <h3 class = "titles">Child</h3>
                <ul>
                    <li class = "subTitles"><a href="">Child\'s Sweater</a></li>
                    <li class = "subTitles"><a href="">Child\'s Jacket</a></li>
                    <li class = "subTitles"><a href="">Child\'s Footwear</a></li>
                    <li class = "subTitles"><a href="">Child\'s Pants</a></li>
                    <li class = "subTitles"><a href="">Child\'s T-Shirts</a></li>
                    <li class = "subTitles"><a href="">Child\'s Sneakers</a></li>
                </ul>
                <span
                >Our team is available to assist you : <br />
          Monday-Friday: 8am to 4pm (MDT)
        </span>
            </div>
            <div id="info3" class="infodivs">
                <h2>COMPANY</h2>
                <ul>
                    <li>Terms & Conditions</li>
                    <li>Privacy Policy</li>
                    <li>Accessibility Statement</li>
                    <div>
                        <h3 class = "titles">Price</h3>
                        <ul>
                            <li class = "subTitles"><a href="">Under $50</a></li>
                            <li class = "subTitles"><a href="">$50 - $88</a></li>
                            <li class = "subTitles"><a href="">$88 - $188</a></li>
                            <li class = "subTitles"><a href="">$200 - $400</a></li>
                            <li class = "subTitles"><a href="">$400 - $500</a></li>
                        </ul>
                    </div>
                    <div id="info4" class="infodivs">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="31px"
                            height="30px"
                        >
                            <defs>
                                <filter id="Filter_0">
                                    <feFlood
                                        flood-color="rgb(153, 153, 153)"
                                        flood-opacity="1"
                                        result="floodOut"
                                    />
                                    <feComposite
                                        operator="atop"
                                        in="floodOut"
                                        in2="SourceGraphic"
                                        result="compOut"
                                    />
                                    <feBlend mode="normal" in="compOut" in2="SourceGraphic" />
                                </filter>
                            </defs>
                            <g filter="url(#Filter_0)">
                                <path
                                    fill-rule="evenodd"
                                    fill="rgb(0, 0, 0)"
                                    d="M15.500,0.715 C7.216,0.715 0.501,7.111 0.501,15.000 C0.501,22.890 7.216,29.285 15.500,29.285 C23.784,29.285 30.500,22.890 30.500,15.000 C30.500,7.111 23.784,0.715 15.500,0.715 ZM21.223,7.990 L19.148,7.991 C17.521,7.991 17.207,8.727 17.207,9.807 L17.207,12.189 L21.086,12.189 L21.084,15.920 L17.207,15.920 L17.207,25.495 L13.161,25.495 L13.161,15.920 L9.778,15.920 L9.778,12.189 L13.161,12.189 L13.161,9.438 C13.161,6.245 15.209,4.505 18.200,4.505 L21.223,4.510 L21.223,7.990 L21.223,7.990 Z"
                                />
                            </g>
                        </svg>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="30px"
                            height="30px"
                        >
                            <image
                                x="0px"
                                y="0px"
                                width="30px"
                                height="30px"
                                xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAQAAACROWYpAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkARQBFSSpbnK+AAAC4UlEQVQ4y43VbWiVZRwG8N9zdjynuePaxJdKzFCwBQ2tnJIJlWY5KnohIxeLKCkQoggiPxRZqKREX8KN86UMU3AQRQMx7Y2Y+ZJM5wZr6QdLxEp0a9Ymc9vpw3nOc55t5nZ9ee7rf/+v+/7f1/3yBFmjUKbWY2rMkgF9zjnuK826R6cGI8QZa72g2tVwyqcaXfg/cY1talwLXV71dZEmoladb8aRcqsvvVKkJY/mv8/b7jrjI6lWvwPxmZdpiNUwHjZZXRiJ6T5WGnV12OGoHlcM510xSbkF6i2KZm9w3Ml82Zs8HEk3q9MiJSOjTMZkpRJ67NfokgcFYLIKXxBkb3LMjFD6veXu02j+mEX87g1NdqoLeb8l2hOei6RscYMmVWOkr3nZRxbabCCMlFpHwpNRyt9arTA9ZL/6wIs26sBh++Ss1uVslF2rIun2iPbqMztsN3rdZTP85R3v+lyvmaYZdCnKnuOeRMznQYPSoMU6CxzW6YSV3tauCmkMxhZTHV9dzrAS0GCKJotNVa3JHO8ZRkC4fXlUjBQXEo5a7OYwWu4Bv+gJ+3Kx/PRoX/MDlI24fhekpa5y0obj4kAQih/Xane0980ekYlVVkBfMkZKJEJDXrLTMw5Z6oT3VVoPhgg9yeOPhD8jkpLyD7jRXmts87SNVtlnLviXWPmXHUw4FNGpKrWH7bl26XRAp2Z3hLE2ZaZF2R3aEj6JHEx7yrf2Rt3zLFUVsVafqTUz4tsNBdlJjlgYBs5Y4rwNlpuiJDQwZ0ifFhvkHHFbmPmbO11MumKrXWFotv3e9FbM/+K+LrM1kvKhi/kHMLDDszEXj+nUbSA8TQkp15tvUeyu/eAhA4XXs9x37jJRdFmRv1350Xqt0TZB6Wn1hYtZKOWklfZMQHrQ/X4ukOI6znvCeueuIey2xSqni4Fg1L9qlrXqzRsjPGO3rFMjg0F27AyV7navW5RKGtLvrB/9FDvGEf4DVazDPlXXJ1wAAAAASUVORK5CYII="
                            />
                        </svg>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="29px"
                            height="30px"
                        >
                            <image
                                x="0px"
                                y="0px"
                                width="29px"
                                height="30px"
                                xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAeCAQAAAB6Dt0qAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkARQBFgnHnH0IAAACOUlEQVQ4y5XV32vNcRzH8cc5Z2wrRDqUmYUoM1l+pGwtieTiiKEVkZJf/wBXlFJ+heLGlNzMMjfIrxv5FZK1C4ZiF1vzOxrLr/k5F5tzzvd7zo7jffV9v97v5/f9/b7f78/3G6mXYTGV5qg0WqHv3nngnhbfwmkFIT+u1nozRUN6qwaNnqdLkUDVTbYrMZC9ddChVPXU3eNOOZoDJG63C0rD6CgX1fm3LXDF5HR0pDNm5wHCZGeVpdBj5uYJwhQnRfvQhNr/AKHKRiL1hZpNy5HW7JKoJabr9cqYfvWNiliizpZk2g+7lBmRBu60zlXXNOh0SqnxImCIrlhir0nJxC7LXVZjdL9/wzq/wXctuk1SmVyieFRVWo1iJR6rsc1TcDvw6BMtU5j0KqKGpQWH2GSwD/aZZakDmgNorbFpXiy4w+90KNGOj845F2rY8KAbXPNhWrQP0OlYeA5BdLDjyjNOTZ/NUJ4LZao9JmZFNxuUG4WOLFqNNWEp6nNISWiyItB34g6Fa/odDQ0AFqkOfD3KnDcjI6utQKN5SbfLcdfc9T6pFKuzw/gsr9AUqR/qfjLUq91lNz31UZFxqiw1NWvTulVE6lmtISPUY5CYgW2r/VE0upoRKsoJtjrSN5xeaz2Sv720Ss/fub6wzJM8wTdWekhqJdosdCMP8L6F7vRdprbpmcV26sqBfXLYfK1/3VgiFfrputO+KA0fL7x0wgYNvqakSJbf1QjVqk1QrMAvPTrddsvrcNofhBGA5xLabvoAAAAASUVORK5CYII="
                            />
                        </svg>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="29px"
                            height="30px"
                        >
                            <image
                                x="0px"
                                y="0px"
                                width="29px"
                                height="30px"
                                xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAeCAQAAAB6Dt0qAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkARQBFjCYmfUAAAACb0lEQVQ4y4XUSWhUWRgF4K9eYjSiNs4GI7qwcQCnFqUVRRA1iESxBXGABkWCiiMdEXThoqFdNgoSg2K6wY1z3DgExNjBpkUFA4qQRUsEx6ARBxwSKy6qKnn3Valndd/5z+G/93/n3lStBPqqsNTPyvUDHZ6476J6raEwFViLrFVtkkJ4oc6fHvcQUaw41iV/f8XIYNVuWR3rU5lbVTplqm+jv1+UaJKOd13pnHLfR8oeR/Xq6TrLWb0TopvOqfevNsP0DSpTdLqWGVOJJjODYrM9GnRmv0artiWovzfPzQi/JYyHzHah20irrZZqjylKHdanqLLMcaUx+rxfdWSHss98n7WiRZtlMVWZB5HVBsWoD/Z1r98pt1ejAyLUuRbsrSqyIiAuasYYA5H2DGyzE10OBsoZkekBcQbsd8J8m6zPsrsNR6OnMWVUHPyUtP9RYqLJFsb4ocZ75qVWI2LeoGfaJ3QViEIafIxTobVYGTr8kzA+dBelRn7dSgX4XUvA7tKOn4z+lnW5QXhuuSvZUDy2wUmwRnFcmqpNnqzKkexqunHe+s9zMMYdP4Sne6N/YN3pdDZ0t92O8dtDI5Ebia4T7C8w4bk2J5iOyOk8WZU1CWaIw0oSXFPkpEcJMqXGtGBnR03Ma1ATaY8FPocBTsTeqEPBncmgQX2EYxrySj+6bDH6qbMxr/rKNp2Zx3SCq4bnCT47Y5wpBYa2WU0uEvet8iJPUGRlQeMfajIjyKDRPHd8H+9V2ZubXg73LPJXwVvTg2aLu7MWZLjNOgs0ZC9YEi12mBN/ZFK1+aIZlqgwSh9Funzy0nUXXPE6lH0BWxGZyjbSiq4AAAAASUVORK5CYII="
                            />
                        </svg>
                    </div>
                </ul>
            </div>
        </div>
        </div>
        </div>
    </section>
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
        <script src="{{asset('js/cbpHorizontalMenu.min.js')}}"></script>
        <script>
            // var Tawk_API = Tawk_API || {},
            //     Tawk_LoadStart = new Date();
            // (function() {
            //     var s1 = document.createElement("script"),
            //         s0 = document.getElementsByTagName("script")[0];
            //     s1.async = true;
            //     s1.src = 'https://embed.tawk.to/5b55ea72df040c3e9e0bdf85/default';
            //     s1.charset = 'UTF-8';
            //     s1.setAttribute('crossorigin', '*');
            //     s0.parentNode.insertBefore(s1, s0);
            // })();


            $(function() {
                cbpHorizontalMenu.init();
            });

            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
                document.getElementById("myDropdown2").classList.remove("show");
            }

            // Close the dropdown if the user clicks outside of it
            window.onclick = function(e) {

                if (!e.target.matches('.dropbtn')) {
                    var myDropdown = document.getElementById("myDropdown");
                    if (myDropdown.classList.contains('show')) {
                        myDropdown.classList.remove('show');
                    }
                }
            }

            function myFunction2() {
                document.getElementById("myDropdown2").classList.toggle("show");
                document.getElementById("myDropdown").classList.remove("show");

            }

            // Close the dropdown if the user clicks outside of it
            window.onclick = function(e) {
                if (!e.target.matches('.dropbtn2')) {
                    var myDropdown = document.getElementById("myDropdown2");
                    if (myDropdown.classList.contains('show')) {
                        myDropdown.classList.remove('show');
                    }
                }
            }

        </script>
</body>
</html>
