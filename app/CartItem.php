<?php

namespace App;


class CartItem
{
    /**
     * @var $product Product
     */
    public $product ;

    public $quantity ;

    /**
     * CartItem constructor.
     * @param Product $product
     * @param $quantity
     */
    public function __construct(Product $product, $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }


}
