<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'cart_items','total','user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function order(){
        return $this->belongsTo(Order::class);
    }


    public function increaseProductInCart( Product $product , $quantity=1){
        $cartItems = $this->cart_items;
        if (is_null($cartItems)){
            $cartItems = [];
        }else{
            if (!is_array($cartItems)){
                $cartItems = json_decode($cartItems);
            }
        }

        /**
         * @var $cartItem CartItem
         */
        foreach ($cartItems as $cartItem){
           if ($cartItem->product->id  === $product->id ){
               $cartItem->quantity += $quantity ;
           }
        }
        $this->cart_items = json_encode($cartItems);
        $temptotal = 0 ;
        foreach ($cartItems as $cartItem){
            $temptotal += $cartItem->quantity * $cartItem->product->price ;
        }
        $this->total = $temptotal ;
    }
    public function decrease( Product $product ){
        $cartItems = $this->cart_items;
        if (is_null($cartItems)){
            $cartItems = [];
        }else{
            if (!is_array($cartItems)){
                $cartItems = json_decode($cartItems);
            }
        }

        /**
         * @var $cartItem CartItem
         */
        foreach ($cartItems as $cartItem){
            if ($cartItem->product->id  === $product->id ){
                $cartItem->quantity -=1 ;
            }
        }
        $this->cart_items = json_encode($cartItems);
        $temptotal = 0 ;
        foreach ($cartItems as $cartItem){
            $temptotal += $cartItem->quantity * $cartItem->product->price ;
        }
        $this->total = $temptotal ;
    
    }
    
    public function addProductToCart( Product $product , $quantity=1 ){
        $cartItems = $this->cart_items;
        if (is_null($cartItems)){
            $cartItems = [];
        }else{
            if (!is_array($cartItems)){
                $cartItems = json_decode($cartItems);
            }
        }
        /**
         * @var $cartItem CartItem
         */
        $cartItem = new CartItem($product,$quantity);
        array_push($cartItems,$cartItem);
        $this->cart_items = json_encode($cartItems);
        $temptotal = 0 ;
        foreach ($cartItems as $cartItem){
            $temptotal += $cartItem->quantity * $cartItem->product->price ;
        }
        $this->total = $temptotal ;
      //  return $cartItems ;
    }
    public function check(Product $product){
        $cartItems = $this->cart_items;
        if (is_null($cartItems)){
            $cartItems = [];
        }else{
            if (!is_array($cartItems)){
                $cartItems = json_decode($cartItems);
            }
        }

        foreach ($cartItems as $cartItem ){
           $num = intval($cartItem->quantity);
           if($num == 0 ){
               $this->removeElement($cartItems,$cartItem);
            return $cartItems ;
           }
        }
        return $cartItems ;
    }
    public function removeElement($array,$value) {
        if (($key = array_search($value, $array)) !== false) {
          unset($array[$key]);
        }
       return $array;
     }

    public function inItems($product_id){
        /// Check if the product id in items
        $cartItems = $this->cart_items;
        if (is_null($cartItems)){
            $cartItems = [];
        }else{
            if (!is_array($cartItems)){
                $cartItems = json_decode($cartItems);
            }

        }
        $returnresults = false ;
        /**
         * @var $cartItem CartItem
         */

        foreach ( $cartItems as $cartItem ){

            if ($product_id == $cartItem->product->id ){
                $returnresults = true ;
            }
        }
        return $returnresults ;
    }
    

}
