<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class pricipalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $falshsales = Product::orderBy('nb_sales','DESC')->orderBy('title', 'ASC')->take(6)->get();
        $topsales = Product::orderBy('nb_sales','DESC')->orderBy('title', 'ASC')->take(1)->get();

        // get cart
        $user = Auth::user();
        if($user != null){
            $cart = $user->cart;
            $cartItems = json_decode($cart->cart_items);
            $finalCartItems = [];
            foreach ($cartItems as $cartItem){
                $product = Product::find(intval($cartItem->product->id));
                $finalcartItem = new Product();
                $finalcartItem->product = new ProductResource($product);
                $finalcartItem->quantity =number_format(doubleval($cartItem->quantity),2);
                array_push($finalCartItems,$finalcartItem);
            }

            return view('principal')->with(array('falshsales'=>$falshsales,'topsales'=>$topsales,'cart_items'=>$finalCartItems,'id'=>$cart->id,'total'=>number_format(doubleval($cart->total),2),));
        }else{
            return view('principal')->with(array('falshsales'=>$falshsales,'topsales'=>$topsales,'login'=>true));
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
