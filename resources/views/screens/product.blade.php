@extends('layouts.nav');
@section('content')


    <div id="topthing">
        <div id="prod">
            <h3 id="prixprod">99.99 $
            </h3>
            <div id="imageprod">
                <img src="{{asset('images/produit.jpg')}}" alt="produit">
            </div>
            <div id="imgslider">
                <div class="arrow_img_slider">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/>
                    </svg>
                </div>
                <div class="arrow_img_slider">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/>
                    </svg>
                </div>
                <div class="slideronme">
                    <div class="container_mini_imgs">
                        <div class="mini_img"><img src="{{asset('images/produit.jpg')}}"/></div>
                        <div class="mini_img"><img src="{{asset('images/produit.jpg')}}"/></div>
                        <div class="mini_img"><img src="{{asset('images/produit3.jpg')}}"/></div>
                        <div class="mini_img"><img src="{{asset('images/produit.jpg')}}"/></div>
                        <div class="mini_img"><img src="{{asset('images/produit2.jpg')}}"/></div>
                        <div class="mini_img"><img src="{{asset('images/produit1.jpg')}}"/></div>
                        <div class="mini_img"><img src="{{asset('images/produit1.jpg')}}"/></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="selling">
            <h3 id="title_product">This produit title</h3>
            <div id="color">
                <h5>Couleur</h5>
                <div class="containdivs">
                    <div class="mini_img"><img src="{{asset('images/produit.jpg')}}"/></div>
                    <div class="mini_img"><img src="{{asset('images/produit.jpg')}}"/></div>
                    <div class="mini_img"><img src="{{asset('images/produit.jpg')}}"/></div>
                    <div class="mini_img"><img src="{{asset('images/produit.jpg')}}"/></div>
                    <div class="mini_img"><img src="{{asset('images/produit.jpg')}}"/></div>
                </div>
            </div>
            <div id="size">
                <h5>Size</h5>
                <div class="containdivs">
                    <ul>
                        <li class="size activee"> 45</li>
                        <li class="size"> 40</li>
                        <li class="size"> 38</li>
                        <li class="size"> 33</li>
                    </ul>
                </div>
            </div>
            <div id="rating">
                <h5>Rating</h5>
                <div class="containdivs">
                    <ul>
                        <li class="star checked">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z"/>
                            </svg>
                        </li>
                        <li class="star checked">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z"/>
                            </svg>
                        </li>
                        <li class="star checked">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z"/>
                            </svg>
                        </li>
                        <li class="star checked">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z"/>
                            </svg>
                        </li>
                        <li class="star ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z"/>
                            </svg>
                        </li>

                    </ul>
                </div>
            </div>
            <div id="buyit">
                <div>buy now</div>
                <div>add to panier</div>
            </div>

        </div>
    </div>
    <div id="similar_prods">
        <h1> Recomendation </h1>
        <div
            class="produitslider"
            data-slick='{"slidesToShow": 3, "slidesToScroll": 1}'
        >
            <div class="produit">
                <div class="imageproduit">
                    <img src="images/produit1.jpg" alt=""/>
                </div>
                <div class="details">
                    <h6>Nike Air Max 270 React LX</h6>
                    <span>Men's Pullover Hoodie <br/></span>
                    <span>689dh</span>
                </div>
            </div>
            <div class="produit">
                <div class="imageproduit">
                    <img src="images/produit1.jpg" alt=""/>
                </div>
                <div class="details">
                    <h6>Nike Air Max 270 React LX</h6>
                    <span>Men's Pullover Hoodie <br/></span>
                    <span>689dh</span>
                </div>
            </div>
            <div class="produit">
                <div class="imageproduit">
                    <img src="images/produit1.jpg" alt=""/>
                </div>
                <div class="details">
                    <h6>Nike Air Max 270 React LX</h6>
                    <span>Men's Pullover Hoodie <br/></span>
                    <span>689dh</span>
                </div>
            </div>

            <div class="produit">
                <div class="imageproduit">
                    <img src="images/produit2.jpg" alt=""/>
                </div>
                <div class="details">
                    <h6>Nike Air Max 270 React LX</h6>
                    <span>Men's Pullover Hoodie <br/></span>
                    <span>689dh</span>
                </div>
            </div>
            <div class="produit">
                <div class="imageproduit">
                    <img src="images/produit2.jpg" alt=""/>
                </div>
                <div class="details">
                    <h6>Nike Air Max 270 React LX</h6>
                    <span>Men's Pullover Hoodie <br/></span>
                    <span>689dh</span>
                </div>
            </div>
            <div class="produit">
                <div class="imageproduit">
                    <img src="images/produit3.jpg" alt=""/>
                </div>
                <div class="details">
                    <h6>Nike Air Max 270 React LX</h6>
                    <span>Men's Pullover Hoodie <br/></span>
                    <span>689dh</span>
                </div>
            </div>
        </div>
    </div>
    <div id="avis">
        <h1>Avis</h1>
        <div class="comment">
            <div>
                <div class="profpic">
                </div>
                <span>
            username
        </span>
            </div>
            <div>
                <div class="detailcomment">
                    Un paragraphe est une section de texte en prose vouée au développement d'un point particulier
                    souvent au moyen de plusieurs phrases, dans la continuité du précédent et du suivant. Sur le plan
                    typographique, le début d'un paragraphe est marqué par un léger renfoncement ou par un saut de
                    ligne.
                </div>
                <div class="likesdiv">
                    <div class="like likeyes likethis">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M5 14h-5v-12h5v12zm18.875-4.809c0-.646-.555-1.32-1.688-1.41-.695-.055-.868-.623-.031-.812.701-.159 1.098-.652 1.098-1.181 0-.629-.559-1.309-1.826-1.543-.766-.141-.842-.891-.031-.953.688-.053.96-.291.96-.626-.001-.931-1.654-2.666-4.852-2.666-4.16 0-6.123 2.067-10.505 2.768v10.878c2.375.869 4.466 2.644 5.688 6.886.478 1.661.781 3.468 2.374 3.468 2.375 0 2.594-5.125 1.688-8.781 1.312-.688 3.751-.936 4.979-.885 1.771.072 2.271-.818 2.271-1.49 0-1.011-.833-1.35-1.354-1.51-.609-.188-.889-.807-.031-.922.836-.112 1.26-.656 1.26-1.221z"/>
                        </svg>
                        <span>
                        1100
                    </span>
                    </div>
                    <div class="like likeno">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M5 14h-5v-12h5v12zm18.875-4.809c0-.646-.555-1.32-1.688-1.41-.695-.055-.868-.623-.031-.812.701-.159 1.098-.652 1.098-1.181 0-.629-.559-1.309-1.826-1.543-.766-.141-.842-.891-.031-.953.688-.053.96-.291.96-.626-.001-.931-1.654-2.666-4.852-2.666-4.16 0-6.123 2.067-10.505 2.768v10.878c2.375.869 4.466 2.644 5.688 6.886.478 1.661.781 3.468 2.374 3.468 2.375 0 2.594-5.125 1.688-8.781 1.312-.688 3.751-.936 4.979-.885 1.771.072 2.271-.818 2.271-1.49 0-1.011-.833-1.35-1.354-1.51-.609-.188-.889-.807-.031-.922.836-.112 1.26-.656 1.26-1.221z"/>
                        </svg>
                        <span>
                        10
                    </span>
                    </div>
                </div>
            </div>

        </div>
        <div class="comment">
            <div>
                <div class="profpic">
                </div>
                <span>
            username
        </span>
            </div>
            <div>
                <div class="detailcomment">
                    Un paragraphe est une section de texte en prose vouée au développement d'un point particulier
                    souvent au moyen de plusieurs phrases, dans la continuité du précédent et du suivant. Sur le plan
                    typographique, le début d'un paragraphe est marqué par un léger renfoncement ou par un saut de
                    ligne.
                </div>
                <div class="likesdiv">
                    <div class="like likeyes likethis">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M5 14h-5v-12h5v12zm18.875-4.809c0-.646-.555-1.32-1.688-1.41-.695-.055-.868-.623-.031-.812.701-.159 1.098-.652 1.098-1.181 0-.629-.559-1.309-1.826-1.543-.766-.141-.842-.891-.031-.953.688-.053.96-.291.96-.626-.001-.931-1.654-2.666-4.852-2.666-4.16 0-6.123 2.067-10.505 2.768v10.878c2.375.869 4.466 2.644 5.688 6.886.478 1.661.781 3.468 2.374 3.468 2.375 0 2.594-5.125 1.688-8.781 1.312-.688 3.751-.936 4.979-.885 1.771.072 2.271-.818 2.271-1.49 0-1.011-.833-1.35-1.354-1.51-.609-.188-.889-.807-.031-.922.836-.112 1.26-.656 1.26-1.221z"/>
                        </svg>
                        <span>
                        1100
                    </span>
                    </div>
                    <div class="like likeno">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M5 14h-5v-12h5v12zm18.875-4.809c0-.646-.555-1.32-1.688-1.41-.695-.055-.868-.623-.031-.812.701-.159 1.098-.652 1.098-1.181 0-.629-.559-1.309-1.826-1.543-.766-.141-.842-.891-.031-.953.688-.053.96-.291.96-.626-.001-.931-1.654-2.666-4.852-2.666-4.16 0-6.123 2.067-10.505 2.768v10.878c2.375.869 4.466 2.644 5.688 6.886.478 1.661.781 3.468 2.374 3.468 2.375 0 2.594-5.125 1.688-8.781 1.312-.688 3.751-.936 4.979-.885 1.771.072 2.271-.818 2.271-1.49 0-1.011-.833-1.35-1.354-1.51-.609-.188-.889-.807-.031-.922.836-.112 1.26-.656 1.26-1.221z"/>
                        </svg>
                        <span>
                        10
                    </span>
                    </div>
                </div>
            </div>

        </div>
        <div class="comment">
            <div>
                <div class="profpic">
                </div>
                <span>
            username
        </span>
            </div>
            <div>
                <div class="detailcomment">
                    Un paragraphe est une section de texte en prose vouée au développement d'un point particulier
                    souvent au moyen de plusieurs phrases, dans la continuité du précédent et du suivant. Sur le plan
                    typographique, le début d'un paragraphe est marqué par un léger renfoncement ou par un saut de
                    ligne.
                </div>
                <div class="likesdiv">
                    <div class="like likeyes likethis">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M5 14h-5v-12h5v12zm18.875-4.809c0-.646-.555-1.32-1.688-1.41-.695-.055-.868-.623-.031-.812.701-.159 1.098-.652 1.098-1.181 0-.629-.559-1.309-1.826-1.543-.766-.141-.842-.891-.031-.953.688-.053.96-.291.96-.626-.001-.931-1.654-2.666-4.852-2.666-4.16 0-6.123 2.067-10.505 2.768v10.878c2.375.869 4.466 2.644 5.688 6.886.478 1.661.781 3.468 2.374 3.468 2.375 0 2.594-5.125 1.688-8.781 1.312-.688 3.751-.936 4.979-.885 1.771.072 2.271-.818 2.271-1.49 0-1.011-.833-1.35-1.354-1.51-.609-.188-.889-.807-.031-.922.836-.112 1.26-.656 1.26-1.221z"/>
                        </svg>
                        <span>
                        1100
                    </span>
                    </div>
                    <div class="like likeno">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M5 14h-5v-12h5v12zm18.875-4.809c0-.646-.555-1.32-1.688-1.41-.695-.055-.868-.623-.031-.812.701-.159 1.098-.652 1.098-1.181 0-.629-.559-1.309-1.826-1.543-.766-.141-.842-.891-.031-.953.688-.053.96-.291.96-.626-.001-.931-1.654-2.666-4.852-2.666-4.16 0-6.123 2.067-10.505 2.768v10.878c2.375.869 4.466 2.644 5.688 6.886.478 1.661.781 3.468 2.374 3.468 2.375 0 2.594-5.125 1.688-8.781 1.312-.688 3.751-.936 4.979-.885 1.771.072 2.271-.818 2.271-1.49 0-1.011-.833-1.35-1.354-1.51-.609-.188-.889-.807-.031-.922.836-.112 1.26-.656 1.26-1.221z"/>
                        </svg>
                        <span>
                        10
                    </span>
                    </div>
                </div>
            </div>

        </div>
        <div class="comment">
            <div>
                <div class="profpic">
                </div>
                <span>
            username
        </span>
            </div>
            <div>
                <div class="detailcomment">
                    Un paragraphe est une section de texte en prose vouée au développement d'un point particulier
                    souvent au moyen de plusieurs phrases, dans la continuité du précédent et du suivant. Sur le plan
                    typographique, le début d'un paragraphe est marqué par un léger renfoncement ou par un saut de
                    ligne.
                </div>
                <div class="likesdiv">
                    <div class="like likeyes likethis">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M5 14h-5v-12h5v12zm18.875-4.809c0-.646-.555-1.32-1.688-1.41-.695-.055-.868-.623-.031-.812.701-.159 1.098-.652 1.098-1.181 0-.629-.559-1.309-1.826-1.543-.766-.141-.842-.891-.031-.953.688-.053.96-.291.96-.626-.001-.931-1.654-2.666-4.852-2.666-4.16 0-6.123 2.067-10.505 2.768v10.878c2.375.869 4.466 2.644 5.688 6.886.478 1.661.781 3.468 2.374 3.468 2.375 0 2.594-5.125 1.688-8.781 1.312-.688 3.751-.936 4.979-.885 1.771.072 2.271-.818 2.271-1.49 0-1.011-.833-1.35-1.354-1.51-.609-.188-.889-.807-.031-.922.836-.112 1.26-.656 1.26-1.221z"/>
                        </svg>
                        <span>
                        1100
                    </span>
                    </div>
                    <div class="like likeno">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M5 14h-5v-12h5v12zm18.875-4.809c0-.646-.555-1.32-1.688-1.41-.695-.055-.868-.623-.031-.812.701-.159 1.098-.652 1.098-1.181 0-.629-.559-1.309-1.826-1.543-.766-.141-.842-.891-.031-.953.688-.053.96-.291.96-.626-.001-.931-1.654-2.666-4.852-2.666-4.16 0-6.123 2.067-10.505 2.768v10.878c2.375.869 4.466 2.644 5.688 6.886.478 1.661.781 3.468 2.374 3.468 2.375 0 2.594-5.125 1.688-8.781 1.312-.688 3.751-.936 4.979-.885 1.771.072 2.271-.818 2.271-1.49 0-1.011-.833-1.35-1.354-1.51-.609-.188-.889-.807-.031-.922.836-.112 1.26-.656 1.26-1.221z"/>
                        </svg>
                        <span>
                        10
                    </span>
                    </div>
                </div>
            </div>

        </div>

        <div id="showmore">
            Show More
        </div>
    </div>
@endsection
