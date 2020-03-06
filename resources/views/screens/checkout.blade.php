@extends('layouts.nav');
@section('content')
    <section class="wn__checkout__area section-padding--lg bg__white">
        <div class="container" >
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="customer_details">
                        <h3>Billing details</h3>
                        <form action="{{url('charge') }}" method="post">
                            {{ csrf_field() }}
                        <div class="customar__field">
                            <div class="margin_between">
                                <div class="input_box space_between">
                                    <label>Country<span>*</span></label>
                                    <select class="select__option">
                                        <option>Select a country…</option>
                                        <option>Afghanistan</option>
                                        <option>American Samoa</option>
                                        <option>Anguilla</option>
                                        <option>American Samoa</option>
                                        <option>Antarctica</option>
                                        <option>Antigua and Barbuda</option>
                                    </select>
                                </div>
                                <div class="input_box space_between">
                                    <label>State<span>*</span></label>
                                    <select class="select__option">
                                        <option>Select a state…</option>
                                        <option>Afghanistan</option>
                                        <option>American Samoa</option>
                                        <option>Anguilla</option>
                                        <option>American Samoa</option>
                                        <option>Antarctica</option>
                                        <option>Antigua and Barbuda</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input_box">
                                <label>Address <span>*</span></label>
                                <input type="text" placeholder="Street address">
                            </div>
                            <div class="input_box">
                                <input type="text" placeholder="Apartment, suite, unit etc. (optional)">
                            </div>
                            <div class="input_box">
                                <label>Postcode / ZIP <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="margin_between">
                                <div class="input_box space_between">
                                    <label>Phone <span>*</span></label>
                                    <input type="text">
                                </div>
                                <div class="input_box space_between">
                                    <label>Email address <span>*</span></label>
                                    <input type="email">
                                </div>
                            </div>
                            <div class="input_box">
                                <label>Postcode / ZIP <span>*</span></label>
                                <input type="text" name="amount"/>
                            </div>

                            <div>
                                <button class="btn col-lg" style="background-color: gold" name="submit">
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
                                </button>
                            </div>
                            <!-- Include the PayPal JavaScript SDK -->
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-12 md-mt-40 sm-mt-40">
                    <div class="wn__order__box">
                        <h3 class="onder__title">Your order</h3>
                        <ul class="order__total">
                            <li>Product</li>
                            <li>Total</li>
                        </ul>
                        <ul class="order_product">
                            <li>Buscipit at magna × 1<span>$48.00</span></li>
                            <li>Buscipit at magna × 1<span>$48.00</span></li>
                            <li>Buscipit at magna × 1<span>$48.00</span></li>
                            <li>Buscipit at magna × 1<span>$48.00</span></li>
                        </ul>
                        <ul class="shipping__method">
                            <li>Cart Subtotal <span>$48.00</span></li>
                            <li>Shipping
                                <ul>
                                    <li>
                                        <label>$8.00</label>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="total__amount">
                            <li>Order Total <span>$223.00</span></li>
                        </ul>
                    </div>
                    <div id="accordion" class="checkout_accordion mt--30" role="tablist">
                        <div class="payment">
                            <div class="che__header" role="tab" id="headingOne">
                                <a class="checkout__title" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span id="directBank" >Direct Bank Transfer</span>
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="payment-body">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</div>
                            </div>
                        </div>
                        <div class="payment">
                            <div class="che__header" role="tab" id="headingTwo">
                                <a class="collapsed checkout__title" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span id="cheque">Cheque Payment</span>
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="payment-body">Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</div>
                            </div>
                        </div>
                        <div class="payment">
                            <div class="che__header" role="tab" id="headingThree">
                                <a class="collapsed checkout__title" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span id="cod">Cash on Delivery</span>
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="payment-body">Pay with cash upon delivery.</div>
                            </div>
                        </div>
                        <div class="payment">
                            <div class="che__header" role="tab" id="headingFour">
                                <a class="collapsed checkout__title" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <span id = "ppl">PayPal <img src="{{asset('css/cardandCheckout/images/payment.png')}}" alt="payment images"> </span>
                                </a>
                            </div>
                            <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                                <div class="payment-body">Pay with cash upon delivery.</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
