<?php

namespace App\Http\Controllers;

use App\Cart;
use App\CartItem;
use App\Http\Resources\ProductResource;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Isset_;

use function Clue\StreamFilter\remove;

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
        $images = [];
        $temp = [];
        if ($user == null) {
            return  redirect('/newlogin');
        }
        $cart = $user->cart;
        $cartItems = json_decode($cart->cart_items);
        $finalCartItems = [];
        foreach ($cartItems as $cartItem) {
            $product = Product::find(intval($cartItem->product->id));
            $temp = json_decode($product->product_images);
            $finalcartItem = new \stdClass();
            $finalcartItem->product = new ProductResource($product);
            $finalcartItem->quantity = number_format(doubleval($cartItem->quantity), 2);
            array_push($finalCartItems, $finalcartItem);
            array_push($images, $temp[0]);
        }
        return [
            'cart_items' => $finalCartItems,
            'id' => $cart->id,
            'total' => number_format(doubleval($cart->total), 2),
            'images' => $images,
        ];
    }

    public function page()
    {
        $images = [];
        $temp = [];
        $user = Auth::user();
        if ($user == null) {
            return  redirect('/newlogin');
        }
        $cart = $user->cart;
        $cartItems = json_decode($cart->cart_items);
        $finalCartItems = [];
        foreach ($cartItems as $cartItem) {
            //return $cartItem->product->id;
            $product = Product::find(intval($cartItem->product->id));
            $temp = json_decode($product->product_images);
            $finalcartItem = new Product();
            $finalcartItem->product = new ProductResource($product);
            $finalcartItem->quantity = number_format(doubleval($cartItem->quantity), 2);
            array_push($finalCartItems, $finalcartItem);
            array_push($images, $temp[0]);
        }

        return view('screens/myCard')->with(
            array(
                'cartItems' => $finalCartItems,
                'ide' => $cart->id,
                'totale' => doubleval($cart->total),
                'images' => $images,
            )
        );
    }
    public function remove(Request $request)
    {
        if (isset($_POST['deleted'])) {
            $user = Auth::user();
            $images = [];
            $temp = [];

            if ($user == null) {
                return  redirect('/newlogin');
            }
            $cart = $user->cart;
            $cartItems = json_decode($cart->cart_items);
            $i = 0;
            foreach ($cartItems as $cartItem) {
                if ($cartItem->product->id == intval($request->input('deletId'))) {
                    $cart->total -= $cartItem->product->price * $cartItem->quantity;
                    unset($cartItems[$i]);
                    break;
                }
                $i++;
            }
            $arr[] = array_values($cartItems);
            $cart->cart_items = substr(json_encode($arr), 1, -1);
            $cart->save();
            return redirect('/creditCard');
        }
    }
    public function submit(Request $request)
    {
        $user = Auth::user();
        $cart = $user->cart;
        $ca = Cart::find($user->cart->id);
        $final = json_decode($ca->cart_items);
        $i = 0;
        $cartItms = [];
        foreach ($final as $cartItem) {
            $prod = Product::find($request->input('finalpId-')[$i]);
            $newQte =  $request->input("finalQte")[$i];
            $cartItm = new CartItem($prod, "$newQte");
            array_push($cartItms, $cartItm);
            $i++;
        }
        $newTotal = $request->input("finalTotal");
        $ca->cart_items = json_encode($cartItms);
        $ca->total = $newTotal;
        $ca->save();
        return redirect('/checkout');
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
        return  $request;
    }

    public function addProductToCart(Request $request)
    {

        $request->validate([
            'product_id' => 'required',
            'quantity' => 'required',
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
        if ($user == null) {
            return redirect('/newlogin');
        }
        $cart = $user->cart;
        if (is_null($cart)) {
            $cart = new Cart();
            $cart->cart_items = [];
            $cart->total = 0;
            $cart->user_id = Auth::user()->id;
            $user->cart_id = $cart->id;
        }
        /** Check if the product is already in cart */

        if ($cart->inItems($product_id)) {
            /// Increase Quantity
            $cart->increaseProductInCart($product, $quantity);
        } else {
            /// add product to cart
            $cart->addProductToCart($product, $quantity);
        }

        $cart->save();
        $user->cart_id = $cart->id;
        $user->save();
        return redirect()->back();
    }

    public function addProductToCartAjax(Request $request)
    {

        $request->validate([
            'product_id' => 'required',
            'quantity' => 'required',
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
        if ($user == null) {
            return response()->json(['detail' => 'you are not logged', 'status' => '40400']);
        }
        $cart = $user->cart;
        if (is_null($cart)) {
            $cart = new Cart();
            $cart->cart_items = [];
            $cart->total = 0;
            $cart->user_id = Auth::user()->id;
            $user->cart_id = $cart->id;
        }
        /** Check if the product is already in cart */

        if ($cart->inItems($product_id)) {
            /// Increase Quantity
            $cart->increaseProductInCart($product, $quantity);
        } else {
            /// add product to cart
            $cart->addProductToCart($product, $quantity);
        }

        $cart->save();
        $user->cart_id = $cart->id;
        $user->save();
        $cartItems = json_decode($cart->cart_items);
        $cartHtml = '<table id="cardTable">
        <tbody>';
        foreach ($cartItems as $cartItem) {

            $cartHtml .= '<tr>
            <td class="si-pic"><img src="images/img/select-product-1.jpg"
                    alt=""></td>
            <td class="si-text">
                <div class="product-selected">
                    <p>$ ' . $cartItem->product->price . ' x
                        ' . (int) $cartItem->quantity . '</p>
                    <h6>' . $cartItem->product->title . '</h6>
                </div>
            </td>
         </tr>';
        }

        $cartHtml .= '</tbody>
        </table>';
        return response()->json(['detail' => 'Added successfully', 'status' => '20020', 'cart' => $cart, 'cartHtml' => $cartHtml, 'qte' => count($cartItems), 'total' => $cart->total]);
    }

    public function RemoveProductFromCart($id)
    {
        $product = Product::find($id);
        $user = Auth::user();

        // Get the user cart ;
        /**
         *  @var Cart
         */
        //    $cart = $this->CheckCartStatus($user->cart) ;
        $cart = $user->cart;
        if (is_null($cart)) {
            $cart = new Cart();
            $cart->cart_items = [];
            $cart->total = 0;
            $cart->user_id = $user->id;
        }
        /** Check if the product is already in cart */

        if ($cart->inItems($id)) {
            /// Increase Quantity
            $cart->decrease($product);
        }

        $cart->save();
        $user->cart_id = $cart->id;
        $user->save();
        return $cart;
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
