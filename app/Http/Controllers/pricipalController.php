<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Product;
use App\WishList;
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
        $falshsales = ProductResource::collection(Product::orderBy('nb_sales', 'DESC')->orderBy('title', 'ASC')->take(6)->get());
        $womanproducts =  ProductResource::collection(Product::where('gender', 'woman')->orderBy('title', 'ASC')->take(6)->get());
        $manproducts = ProductResource::collection(Product::where('gender', 'man')->orderBy('title', 'ASC')->take(6)->get());
        $childproducts = ProductResource::collection(Product::where('gender', 'child')->orderBy('title', 'ASC')->take(6)->get());
        $topsales = ProductResource::collection(Product::orderBy('nb_sales', 'DESC')->orderBy('title', 'ASC')->take(1)->get());
        $nblikes = 0;
        $nbcartitems = 0;

        /* user likes start*/
        $userlikes = [];

        /* user likes end*/
        $user = Auth::user();
        if ($user != null) {
            $wishlist =  WishList::where('user_id', $user->id);
            foreach ($wishlist as $wish) {
                return  $wish;
            }
        }
        // get cart
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

                return view('principal')->with(array('falshsales' => $falshsales, 'topsales' => $topsales, 'cart_items' => $finalCartItems, 'id' => $cart->id, 'total' => number_format(doubleval($cart->total), 2), 'nbcartitems' => $nbcartitems, 'womanproducts' => $womanproducts, 'manproducts' => $manproducts, 'childproducts' => $childproducts, 'userLikes' => $wishlist, 'user' => Auth::user()));
            } else {
                $wishlist =  array();
                return view('principal')->with(array('falshsales' => $falshsales, 'topsales' => $topsales, 'login' => true, 'nblikes' => $nblikes, 'nbcartitems' => $nbcartitems, 'total' => 0, 'womanproducts' => $womanproducts, 'manproducts' => $manproducts, 'childproducts' => $childproducts));
            }
        } else {
            return view('principal')->with(array('falshsales' => $falshsales, 'topsales' => $topsales, 'login' => true, 'nblikes' => $nblikes, 'nbcartitems' => $nbcartitems, 'total' => 0, 'womanproducts' => $womanproducts, 'manproducts' => $manproducts, 'childproducts' => $childproducts));
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
