<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Http\Resources\ProductResource;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $cart = $user->cart;
        $cartItems = json_decode($cart->cart_items);
        $finalCartItems = [];
        foreach ($cartItems as $cartItem){
            $product = Product::find(intval($cartItem->product->id));
            $finalcartItem = new \stdClass();
            $finalcartItem->product = new ProductResource($product);
            $finalcartItem->quantity =number_format(doubleval($cartItem->quantity),2);
            array_push($finalCartItems,$finalcartItem);
        }
        return [
            'cart_items'=>$finalCartItems,
            'id'=>$cart->id,
            'total'=>number_format(doubleval($cart->total),2),
        ];
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
        return  $request ;
    }

    public function addProductToCart(Request $request){

        $request->validate([
            'product_id'=>'required',
            'quantity'=>'required',
        ]);


        $user = Auth::user();
        $product_id = $request->input('product_id');
        $quantity = $request->input('quantity');
        $product = Product::findOrFail($product_id);
        // Get the user cart ;
        /**
         *  @var Cart
         */
        //    $cart = $this->CheckCartStatus($user->cart) ;
        $cart = $user->cart ;
        if (is_null($cart)){
            $cart = new Cart();
            $cart->cart_items = [] ;
            $cart->total = 0 ;
            $cart->user_id = Auth::user()->id ;
            $user->cart_id = $cart->id ;

        }
        /** Check if the product is already in cart */

        if ($cart->inItems($product_id)){
            /// Increase Quantity
            $cart->increaseProductInCart($product , $quantity  );
        }else{
            /// add product to cart
            $cart->addProductToCart($product , $quantity);
        }

        $cart->save();
        $user->cart_id = $cart->id ;
        $user->save();
        return redirect()->back() ;
    }

    public function RemoveProductFromCart( $id ){
        $product = Product::find($id);
        $user = Auth::user();

        // Get the user cart ;
        /**
         *  @var Cart
         */
        //    $cart = $this->CheckCartStatus($user->cart) ;
        $cart = $user->cart ;
        if (is_null($cart)){
            $cart = new Cart();
            $cart->cart_items = [] ;
            $cart->total = 0 ;
            $cart->user_id = $user->id;

        }
        /** Check if the product is already in cart */

        if ($cart->inItems($id)){
            /// Increase Quantity
            $cart->decrease($product);
        }

        $cart->save();
        $user->cart_id = $cart->id ;
        $user->save();
        return $cart ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
