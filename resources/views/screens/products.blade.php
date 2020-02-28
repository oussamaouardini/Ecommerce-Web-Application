@extends('layouts.nav');
@section('content')
    <div id="body">
        <div id="filterhider"></div>
        <div id="filter">
            <ul>
                <li class="lifilter">
                    <div class="title">
                        <label>
                            <input type="checkbox" />
                            <div></div>
                            Ground types
                        </label>
                    </div>
                    <ul>
                        <li class="sublifilter">
                            <label>
                                <input type="checkbox" value="Firm Ground" id="Firm_Ground" />
                                <div></div>
                                Firm Ground
                            </label>
                        </li>
                        <li class="sublifilter">
                            <label>
                                <input
                                    type="checkbox"
                                    value="Turf Soccer Shoes"
                                    id="Turf_Soccer_Shoes"/>
                                <div></div>
                                Turf Soccer Shoes
                                <source
                                /></label>
                        </li>
                        <li class="sublifilter">
                            <label>
                                <input
                                    type="checkbox"
                                    value="Indoor Soccer Shoes"
                                    id="Indoor_Soccer_Shoes"
                                />
                                <div></div>
                                Indoor Soccer Shoes
                            </label>
                        </li>
                        <li class="sublifilter">
                            <label>
                                <input
                                    type="checkbox"
                                    value="Lifestyle Shoes"
                                    id="Lifestyle_Shoes"
                                />
                                <div></div>
                                Lifestyle Shoes
                            </label>
                        </li>
                        <li class="sublifilter">
                            <label>
                                <input
                                    type="checkbox"
                                    value="Artificial Ground"
                                    id="Artificial_Ground"
                                />
                                <div></div>
                                Artificial Ground
                            </label>
                        </li>
                    </ul>
                </li>
                <li class="lifilter">
                    <div class="title">
                        <label>
                            <input type="checkbox" />
                            <div></div>
                            Silo
                        </label>
                    </div>
                    <ul>
                        <li class="sublifilter">
                            <label>
                                <input type="checkbox" value="Ace" id="Ace" />
                                <div></div>
                                Ace
                            </label>
                        </li>
                        <li class="sublifilter">
                            <label>
                                <input
                                    type="checkbox"
                                    value="Turf Soccer Shoes"
                                    id="Turf_Soccer_Shoes"/>
                                <div></div>
                                Turf Soccer Shoes
                                <source
                                /></label>
                        </li>
                        <li class="sublifilter">
                            <label>
                                <input
                                    type="checkbox"
                                    value="Indoor Soccer Shoes"
                                    id="Indoor_Soccer_Shoes"
                                />
                                <div></div>
                                Indoor Soccer Shoes
                            </label>
                        </li>
                        <li class="sublifilter">
                            <label>
                                <input
                                    type="checkbox"
                                    value="Lifestyle Shoes"
                                    id="Lifestyle_Shoes"
                                />
                                <div></div>
                                Lifestyle Shoes
                            </label>
                        </li>
                        <li class="sublifilter">
                            <label>
                                <input
                                    type="checkbox"
                                    value="Artificial Ground"
                                    id="Artificial_Ground"
                                />
                                <div></div>
                                Artificial Ground
                            </label>
                        </li>
                    </ul>
                </li>
                <li class="lifilter">
                    <div class="title">
                        <label>
                            <input type="checkbox" />
                            <div></div>
                            Size
                        </label>
                    </div>
                    <ul>
                        <li class="sublifilter">
                            <label>
                                <input type="checkbox" value="4.0" id="S_4" />
                                <div></div>
                                4.0
                            </label>
                        </li>
                        <li class="sublifilter">
                            <label>
                                <input type="checkbox" value="4.0" id="S_4" />
                                <div></div>
                                4.0
                            </label>
                        </li>
                        <li class="sublifilter">
                            <label>
                                <input type="checkbox" value="5.0" id="S_5" />
                                <div></div>
                                5.0
                            </label>
                        </li>
                        <li class="sublifilter">
                            <label>
                                <input type="checkbox" value="6.0" id="S_6" />
                                <div></div>
                                6.0
                            </label>
                        </li>
                        <li class="sublifilter">
                            <label>
                                <input type="checkbox" value="7.0" id="S_7" />
                                <div></div>
                                7.0
                            </label>
                        </li>
                        <li class="sublifilter">
                            <label>
                                <input type="checkbox" value="8.0" id="S_8" />
                                <div></div>
                                8.0
                            </label>
                        </li>
                        <li class="sublifilter">
                            <label>
                                <input type="checkbox" value="9.0" id="S_9" />
                                <div></div>
                                9.0
                            </label>
                        </li>
                    </ul>
                </li>
                <li class="lifilter">
                    <div class="title">
                        <label>
                            <input type="checkbox" />
                            <div></div>
                            Price
                        </label>
                    </div>
                    <ul>
                        <li class="sublifilter">
                            <label>
                                <input type="checkbox" value="Under $50.0" id="Under_$50.0"/>
                                <div></div>
                                Under $50.0
                                <source
                                /></label>
                        </li>
                        <li class="sublifilter">
                            <label>
                                <input
                                    type="checkbox"
                                    value="$50.00 - $75.00"
                                    id="_$50.00_$75.00"
                                />
                                <div></div>
                                $50.00 - $75.00
                            </label>
                        </li>
                        <li class="sublifilter">
                            <label>
                                <input
                                    type="checkbox"
                                    value="$75.00 - $100.00"
                                    id="_$75.00_$100.00"
                                />
                                <div></div>
                                $75.00 - $100.00
                            </label>
                        </li>
                        <li class="sublifilter">
                            <label>
                                <input
                                    type="checkbox"
                                    value="$100.00 - $150.00"
                                    id="_$100.00_$150.00"
                                />
                                <div></div>
                                $100.00 - $150.00
                            </label>
                        </li>
                    </ul>
                </li>
                <li class="lifilter">
                    <div class="title">
                        <label>
                            <input type="checkbox" />
                            <div></div>
                            Age
                        </label>
                    </div>
                    <ul>
                        <li class="sublifilter">
                            <label>
                                <input type="checkbox" value="Adult" id="Adult" />
                                <div></div>
                                Adult
                            </label>
                        </li>
                        <li class="sublifilter">
                            <label>
                                <input type="checkbox" value="Kids" id="Kids"/>
                                <div></div>
                                Kids
                                <source
                                /></label>
                        </li>
                    </ul>
                </li>
                <li class="lifilter">
                    <div class="title">
                        <label>
                            <input type="checkbox" />
                            <div></div>
                            Gender
                        </label>
                    </div>
                    <ul>
                        <li class="sublifilter">
                            <label>
                                <input type="checkbox" value="Male" id="Male" />
                                <div></div>
                                Male
                            </label>
                        </li>
                        <li class="sublifilter">
                            <label>
                                <input type="checkbox" value="Female" id="Female" />
                                <div></div>
                                Female
                            </label>
                        </li>
                        <li class="sublifilter">
                            <label>
                                <input type="checkbox" value="Unisex" id="Unisex" />
                                <div></div>
                                Unisex
                            </label>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div id="products">
            <div id="brand">
              <span>
                ACE
              </span>
            </div>
            @isset($products)
                @foreach($products as $product)
                    <div class="product">
                        <img src="/images/PRODUCT.png" alt="" />
                        <div class="sale">{{$product->title}}</div>
                        <div class="love">
                            <!-- Generator: Adobe Illustrator 24.0.1, SVG Export Plug-In  -->
                            <svg
                                version="1.1"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                x="0px"
                                y="0px"
                                width="29.96px"
                                height="26.79px"
                                viewBox="0 0 29.96 26.79"
                                style="enable-background:new 0 0 29.96 26.79;"
                                xml:space="preserve"
                            >
                  <style type="text/css">
                      .st0 {
                          fill-rule: evenodd;
                          clip-rule: evenodd;
                          fill: #ffffff;
                          stroke: #e64c41;
                          stroke-width: 1.5;
                          stroke-miterlimit: 10;
                      }
                  </style>
                                <defs></defs>
                                <path
                                    class="st0"
                                    d="M29.21,9c0,2.38-0.92,4.6-2.91,6.97c-1.77,2.13-4.32,4.32-7.28,6.84c-1.09,0.95-2.23,1.92-3.44,2.99l-0.04,0.03
        c-0.16,0.14-0.35,0.21-0.55,0.21s-0.39-0.07-0.55-0.21l-0.04-0.03c-1.21-1.07-2.35-2.04-3.44-2.99c-2.96-2.53-5.51-4.72-7.28-6.84
        C1.67,13.59,0.75,11.38,0.75,9c0-2.19,0.74-4.23,2.07-5.76c1.41-1.61,3.35-2.49,5.49-2.49c3,0,4.89,1.81,5.96,3.31
        c0.28,0.39,0.51,0.78,0.71,1.16c0.2-0.37,0.43-0.77,0.71-1.16c1.06-1.51,2.96-3.31,5.96-3.31c2.14,0,4.08,0.88,5.49,2.49
        C28.47,4.76,29.21,6.81,29.21,9z"
                                />
                </svg>
                        </div>
                        <div class="infos">
                            <div>
                                {{$product->description}}
                            </div>
                            <div><span>${{$product->price}}</span> <span>$224.00</span></div>
                        </div>
                    </div>

                    @endforeach
                    <div >
                        {{ $products->links() }}
                    </div>


            @endisset

        </div>


    </div>
    <script src="{{asset('js/produits.js')}}"></script>
@endsection




