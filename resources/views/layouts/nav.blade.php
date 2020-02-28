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

    <script src="{{asset("js/shop/bootstrap.min.js")}}"></script>
    <script src="{{asset("js/shop/owl.carousel.min.js")}}"></script>
    <script src="{{asset("js/shop/jquery.magnific-popup.min.js")}}"></script>
    <script src="{{asset("js/shop/aos.js")}}"></script>
    <script src="{{asset("js/shop/main.js")}}"></script>

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
<<<<<<< HEAD

    <header class="header-area">
        <!-- Navbar Area -->
        <div class="fitness-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="fitnessNav">

                        <!-- Nav brand -->
                        <a href="#" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
=======
<div id="allnav">
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
    <div id="nav2">
        <button id="navmobile"   >
            <span></span>
            <span></span>
            <span></span>
        </button>
        <ul>
            <li class = "exo">                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="111"
                    height="40"
                    viewBox="0 0 111 40"
                >
                    <image
                        id="Sports_Style"
                        data-name="Sports Style"
                        width="111"
                        height="40"
                        xlink:href="data:img/png;base64,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"
                    />
                </svg>
            </li>
            <li class = "exo" id = "shirt">SHIRTS</li>
            <li class = "exo">SNEAKERS</li>
            <li class = "exo">PANTS</li>
            <li class = "exo">HOODIES</li>
            <li class = "exo">ACCESORIES</li>
            <li class = "exo">LOGIN </li>
            <li class="exo " id="searchli" style = "margin-right : 10px;">
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
            <li class="exo " >
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
                <div id="card">
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
>>>>>>> ba4dcd729e3797c4c5b8725a56988f852a3b3df5
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="blog.html">News</a></li>
                                            <li><a href="{{url('contact')}}">Contact</a></li>
                                            <li><a href="elements.html">Elements</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">categories</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li class = "subTitles"><a href="{{url('/shop/Men\'s Sweater')}}">Men\'s Sweater</a></li>
                                                <li class = "subTitles"><a href="">Men\'s Jacket</a></li>
                                                <li class = "subTitles"><a href="">Men\'s Footwear</a></li>
                                                <li class = "subTitles"><a href="">Men\'s Pants</a></li>
                                                <li class = "subTitles"><a href="">Men\'s T-Shirts</a></li>
                                                <li class = "subTitles"><a href="">Men\'s Sneakers</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="services.html">Services</a></li>
                                                <li><a href="blog.html">News</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="elements.html">Elements</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="services.html">Services</a></li>
                                                <li><a href="blog.html">News</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="elements.html">Elements</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="services.html">Services</a></li>
                                                <li><a href="blog.html">News</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="elements.html">Elements</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="blog.html">News</a></li>
                                    <li><a href="{{url('contact-message')}}">Contact</a></li>
                                </ul>

                                <!-- Call Button -->
                                <a href="#" class="fitness-btn menu-btn ml-30">Call: +34 586 778 8892</a>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
<<<<<<< HEAD
        </div>
    </header>



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
=======
            <div id="searchdiv">
                <div id="search">
                    <input
                        class="form-control form-control-sm "
                        type="text"
                        placeholder="Search"
                        aria-label="Search"
                        id="Searchbar"
                    />
                    <button>Search</button>
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
>>>>>>> ba4dcd729e3797c4c5b8725a56988f852a3b3df5
            </ul>
            <span
            >Our team is available to assist you : <br />
          Monday-Friday: 8am to 4pm (MDT)
        </span>
        </div>
<<<<<<< HEAD
        <div id="info3" class="infodivs">
            <h2>COMPANY</h2>
            <ul>
                <li>Terms & Conditions</li>
                <li>Privacy Policy</li>
                <li>Accessibility Statement</li>
=======
        <div>
            <h3 class = "titles">Price</h3>
            <ul>
                <li class = "subTitles"><a href="">Under $50</a></li>
                <li class = "subTitles"><a href="">$50 - $88</a></li>
                <li class = "subTitles"><a href="">$88 - $188</a></li>
                <li class = "subTitles"><a href="">$200 - $400</a></li>
                <li class = "subTitles"><a href="">$400 - $500</a></li>
>>>>>>> ba4dcd729e3797c4c5b8725a56988f852a3b3df5
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
    </div>
</div>




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
<!--  shop -->


</body>
</html>
