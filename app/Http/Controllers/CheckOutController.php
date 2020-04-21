<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\Http\Resources\ProductResource;
use App\Product;
use App\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nbcartitems = 0;
        $user = Auth::user();
        if ($user != null) {
            if ($user->cart != null) {
                $cart = $user->cart;
                $cartItems = json_decode($cart->cart_items);
                $finalCartItems = [];
                foreach ($cartItems as $cartItem) {
                    $nbcartitems++;
                    $product = Product::find(intval($cartItem->product->id));
                    $finalcartItem = new Product();
                    $finalcartItem->product = new ProductResource($product);
                    $finalcartItem->quantity = number_format(doubleval($cartItem->quantity), 2);
                    array_push($finalCartItems, $finalcartItem);
                }

                return view('/screens/checkout')->with(array('cart_items' => $finalCartItems, 'id' => $cart->id, 'total' => number_format(doubleval($cart->total), 2), 'nbcartitems' => $nbcartitems, 'user' => Auth::user()));
            } else {

                return view('/screens/checkout')->with(array('login' => true, 'nbcartitems' => $nbcartitems, 'total' => 0));
            }
        } else {
            return  redirect('/newlogin');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
