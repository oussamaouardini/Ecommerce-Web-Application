<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public $gateway;

    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true); //set it to 'false' when go live
    }


    public function charge(Request $request, $amount)
    {

        try {
            $response = $this->gateway->purchase(array(
                'amount' => $amount,
                'currency' => env('PAYPAL_CURRENCY'),
                'returnUrl' => url('paymentsuccess'),
                'cancelUrl' => url('paymenterror'),
            ))->send();

            if ($response->isRedirect()) {
                $response->redirect(); // this will automatically forward the customer
            } else {
                // not successful
                echo  "Failed";
                return $response->getMessage();
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
