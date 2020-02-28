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
            <hr />
            <div class="grid">
                <span>Method </span><span>In-Store Pickup (Batoire, AGA) </span
                ><span>Change</span>
            </div>
        </div>
        <h3>Payment</h3>
        <h6>All transactions are secure and encrypted.</h6>
        <div class="payment">
            <div class="paytype">
                <label>
                    <div></div>
                    <input type="radio" name="paytype" />
                </label>
                <span>Credit Cart</span>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="38"
                    height="23"
                    viewBox="0 0 38 23"
                >
                    <image
                        id="Capa_1"
                        data-name="Capa 1"
                        width="38"
                        height="23"
                        xlink:href="data:img/png;base64,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"
                    />
                </svg>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="53"
                    height="17"
                    viewBox="0 0 53 17"
                >
                    <image
                        id="Capa_1"
                        data-name="Capa 1"
                        width="53"
                        height="17"
                        xlink:href="data:img/png;base64,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"
                    />
                </svg>
            </div>
            <div class="centerpay">
                <input type="text" placeholder="Card number" />
                <input type="text" placeholder="Name On card" />
                <div>
                    <!--<input type="date" />-->
                    <input type="text" placeholder="Expiration date (MM/YY)" />
                    <input type="text" placeholder="Security code" />
                </div>
            </div>
            <div class="paytype">
                <label>
                    <div></div>
                    <input type="radio" name="paytype" />
                </label>
                <span
                ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="87"
                        height="22"
                        viewBox="0 0 87 22"
                    >
              <image
                  id="Capa_1"
                  data-name="Capa 1"
                  width="87"
                  height="22"
                  xlink:href="data:img/png;base64,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"
              />
            </svg>
          </span>
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
