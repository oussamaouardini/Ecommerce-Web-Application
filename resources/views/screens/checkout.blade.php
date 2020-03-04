@extends('layouts.nav');
@section('content')
    <section class="wn__checkout__area section-padding--lg bg__white">
        <div class="container" >
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="customer_details">
                        <h3>Billing details</h3>
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
                            <div id="paypal-button-container"></div>
                            <!-- Include the PayPal JavaScript SDK -->
                            <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD"></script>
                            <script>
                                // Render the PayPal button into #paypal-button-container
                                paypal.Buttons({
                                    // Set up the transaction
                                    createOrder: function(data, actions) {
                                        return actions.order.create({
                                            purchase_units: [{
                                                amount: {
                                                    value: '10.00'
                                                }
                                            }]
                                        });
                                    },
                                    // Finalize the transaction
                                    onApprove: function(data, actions) {
                                        return actions.order.capture().then(function(details) {
                                            // Show a success message to the buyer
                                            alert('Transaction completed by ' + details.payer.name.given_name + '!');
                                        });
                                    }
                                }).render('#paypal-button-container');
                            </script>
                        </div>
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
