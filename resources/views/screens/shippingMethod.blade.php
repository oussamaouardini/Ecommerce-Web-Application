@extends('layouts.app');
@section('content')
    <div class="page">
        <div class="main">
            <div class="infoship">
                <div class="grid">
                    <span>Contact</span><span>med.oblla@gmail.com</span
                    ><span>Change</span>
                </div>
                <hr />
                <div class="grid">
                    <span>Shipping Adress </span><span>med.oblla@gmail.com</span
                    ><span>Change</span>
                </div>
            </div>
            <h3>Shipping Informations</h3>
            <div class="shippingways">
                <div class="shipping">
                    <label>
                        <div></div>
                        <input type="radio" name="shipp" />
                    </label>
                    <span>In-Store Pickup (Batoire, AGA)</span>
                    <span>FREE</span>
                </div>
                <div class="shipping">
                    <label>
                        <div></div>
                        <input type="radio" name="shipp" />
                    </label>
                    <span>In-Store Pickup (Inzegan, AGA)</span>
                    <span>FREE</span>
                </div>
                <div class="shipping">
                    <label>
                        <div></div>
                        <input type="radio" name="shipp" />
                    </label>
                    <span>
            Amana Mail
            <br />
            <span>5 Business days</span>
          </span>
                    <span>$8.70</span>
                </div>
            </div>
            <div>
                <button>
                    Back to Informations
                </button>
                <button>
                    Continue to Payment
                </button>
            </div>
        </div>
        <div class="center">
            <div id="listecards">
                <div class="produitcard2">
                    <div class="imageprodcard">
                        <img src="images/produit2.jpg" alt="fzfzf" />
                        <div>1</div>
                    </div>
                    <div class="detailsprodcard">
            <span class="subdetails ">
              ADIDAS MEN'S AC MILAN 3/4 TRAINING PANTS BLACK/CHARCOAL SOLID
              GREY/VICTORY RED
            </span>
                        <div class="subdetails">
                            <span>XL</span>
                            <span>$49.99</span>
                        </div>
                    </div>
                    <div class="closecardprod">
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="produitcard2">
                    <div class="imageprodcard">
                        <img src="images/produitcard.png" alt="" />
                        <div>1</div>
                    </div>
                    <div class="detailsprodcard">
            <span class="subdetails ">
              ADIDAS MEN'S AC MILAN 3/4 TRAINING PANTS BLACK/CHARCOAL SOLID
              GREY/VICTORY RED
            </span>
                        <div class="subdetails">
                            <span>XL</span>
                            <span>$49.99</span>
                        </div>
                    </div>
                    <div class="closecardprod">
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="produitcard2">
                    <div class="imageprodcard">
                        <img src="images/produitcard.png" alt="" />
                        <div>1</div>
                    </div>
                    <div class="detailsprodcard">
            <span class="subdetails ">
              ADIDAS MEN'S AC MILAN 3/4 TRAINING PANTS BLACK/CHARCOAL SOLID
              GREY/VICTORY RED
            </span>
                        <div class="subdetails">
                            <span>XL</span>
                            <span>$49.99</span>
                        </div>
                    </div>
                    <div class="closecardprod">
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="produitcard2">
                    <div class="imageprodcard">
                        <img src="images/produitcard.png" alt="" />
                        <div>1</div>
                    </div>
                    <div class="detailsprodcard">
            <span class="subdetails ">
              ADIDAS MEN'S AC MILAN 3/4 TRAINING PANTS BLACK/CHARCOAL SOLID
              GREY/VICTORY RED
            </span>
                        <div class="subdetails">
                            <span>XL</span>
                            <span>$49.99</span>
                        </div>
                    </div>
                    <div class="closecardprod">
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="produitcard2">
                    <div class="imageprodcard">
                        <img src="images/produitcard.png" alt="" />
                        <div>1</div>
                    </div>
                    <div class="detailsprodcard">
            <span class="subdetails ">
              ADIDAS MEN'S AC MILAN 3/4 TRAINING PANTS BLACK/CHARCOAL SOLID
              GREY/VICTORY RED
            </span>
                        <div class="subdetails">
                            <span>XL</span>
                            <span>$49.99</span>
                        </div>
                    </div>
                    <div class="closecardprod">
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="produitcard2">
                    <div class="imageprodcard">
                        <img src="images/produitcard.png" alt="" />
                        <div>1</div>
                    </div>
                    <div class="detailsprodcard">
            <span class="subdetails ">
              ADIDAS MEN'S AC MILAN 3/4 TRAINING PANTS BLACK/CHARCOAL SOLID
              GREY/VICTORY RED
            </span>
                        <div class="subdetails">
                            <span>XL</span>
                            <span>$49.99</span>
                        </div>
                    </div>
                    <div class="closecardprod">
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <hr />
            <div class="detailsend">
                <div>
                    <span>Subtotal</span>
                    <span>$99.02</span>
                </div>
                <!--<div>
                  <span>Shipping</span>
                  <span>Free</span>
                </div>-->
            </div>
            <hr />
            <div class="detailsend">
                <div>
                    <span>Subtotal</span>
                    <span><i>USD </i> $99.02</span>
                </div>
            </div>
        </div>
    </div>
@endsection
