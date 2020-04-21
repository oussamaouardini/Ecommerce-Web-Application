<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use Illuminate\Http\Request;
use Omnipay\Omnipay;
use App\Payment;
use App\User;
use Exception;
use Illuminate\Support\Facades\Auth;

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

    public function index()
    {
        return view('payment');
    }

    public function charge(Request $request, $amount, $id)
    {

        try {
            $response = $this->gateway->purchase(array(
                'amount' => $amount,
                'currency' => env('PAYPAL_CURRENCY'),
                'returnUrl' => url('paymentsuccess/' . $id),
                'cancelUrl' => url('paymenterror'),
            ))->send();

            if ($response->isRedirect()) {
                $response->redirect(); // this will automatically forward the customer
            } else {
                // not successful
                return $response->getMessage();
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function payment_success(Request $request, $id)
    {
        // Once the transaction has been approved, we need to complete it.
        if ($request->input('paymentId') && $request->input('PayerID')) {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id'             => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),
            ));
            $response = $transaction->send();

            if ($response->isSuccessful()) {
                // The customer has successfully paid.
                $arr_body = $response->getData();

                // Insert transaction data into the database
                $isPaymentExist = Payment::where('payment_id', $arr_body['id'])->first();

                if (!$isPaymentExist) {
                    $payment = new Payment;
                    $payment->payment_id = $arr_body['id'];
                    $payment->user_id = $id;
                    $payment->payer_id = $arr_body['payer']['payer_info']['payer_id'];
                    $payment->payer_email = $arr_body['payer']['payer_info']['email'];
                    $payment->amount = $arr_body['transactions'][0]['amount']['total'];
                    $payment->currency = env('PAYPAL_CURRENCY');
                    $payment->payment_status = $arr_body['state'];
                    $payment->save();
                    $user = User::find($id);
                    $order = new Order();
                    $order->user_id = $id;
                    $order->payment_id = $arr_body['id'];
                    $order->order_items = $user->cart->cart_items;
                    $order->save();
                    $userCard = Cart::find($user->cart->id);
                    $userCard->delete();
                }

                return "Payment is successful. Your transaction id is: " . $arr_body['id'];
            } else {
                return $response->getMessage();
            }
        } else {
            return 'Transaction is declined';
        }
    }

    public function payment_error()
    {
        return 'User is canceled the payment.';
    }

    public function chargeWeb(Request $request)
    {
        if (isset($request['kk'])) {
            try {
                $response = $this->gateway->purchase(array(
                    'amount' => doubleval($_POST['amount']),
                    'currency' => env('PAYPAL_CURRENCY'),
                    'returnUrl' => url('paymentsuccessWeb'),
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

    public function payment_successWeb(Request $request)
    {
        // Once the transaction has been approved, we need to complete it.
        if ($request->input('paymentId') && $request->input('PayerID')) {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id'             => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),
            ));
            $response = $transaction->send();

            if ($response->isSuccessful()) {
                // The customer has successfully paid.
                $arr_body = $response->getData();

                // Insert transaction data into the database
                $isPaymentExist = Payment::where('payment_id', $arr_body['id'])->first();

                if (!$isPaymentExist) {
                    $payment = new Payment;
                    $payment->payment_id = $arr_body['id'];
                    $payment->payer_id = $arr_body['payer']['payer_info']['payer_id'];
                    $payment->payer_email = $arr_body['payer']['payer_info']['email'];
                    $payment->amount = $arr_body['transactions'][0]['amount']['total'];
                    $payment->currency = env('PAYPAL_CURRENCY');
                    $payment->payment_status = $arr_body['state'];
                    $payment->user_id =  Auth::user()->id;
                    $payment->save();

                    // creating order row
                    $order = new Order();
                    $order->user_id = Auth::user()->id;
                    $order->payment_id = $arr_body['id'];
                    $order->order_items = Auth::user()->cart->cart_items;
                    $order->save();

                    $userCard = Cart::find(Auth::user()->cart->id);
                    $userCard->delete();
                }

                return "Payment is successful. Your transaction id is: " . $arr_body['id'];
            } else {
                return $response->getMessage();
            }
        } else {
            return 'Transaction is declined';
        }
    }
}
