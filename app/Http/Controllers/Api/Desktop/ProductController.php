<?php

namespace App\Http\Controllers\Api\Desktop;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stock = ProductResource::collection(Product::paginate(20));
        return response()->json($stock);
    }

    public function allProducts()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->product_title = $request->input('product_title');
        $product->product_description = $request->input('product_description');
        $product->product_images = $request->input('product_images');
        $product->product_category = $request->input('product_category');
        $product->product_brand = $request->input('product_brand');
        $product->product_tags = $request->input('product_tags');
        $product->product_net_price = $request->input('product_net_price');
        $product->product_compare_to_price = $request->input('product_compare_to_price');
        $product->product_price_profit = $request->input('product_price_profit');
        $product->product_barcode = $request->input('product_barcode');
        $product->product_sku = $request->input('product_sku');
        $product->product_quantity = $request->input('product_quantity');
        $product->product_wheight = $request->input('product_wheight');
        $product->product_height = $request->input('product_height');
        $product->product_carrier = $request->input('product_carrier');
        $product->product_size = $request->input('product_size');
        $product->product_colors = $request->input('product_colors');
        $product->save();
        //TODO : We have to agree on this structure and adapt every thing upon it !
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

    public function hide($id)
    {
        $product = Product::find($id);
        $product->hided = true;
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
        $product = Product::find($id);
        $product->product_title = $request->input('product_title');
        $product->product_description = $request->input('product_description');
        $product->product_images = $request->input('product_images');
        $product->product_category = $request->input('product_category');
        //$product->product_category = $request->input('gender');
        $product->product_brand = $request->input('product_brand');
        $product->product_tags = $request->input('product_tags');
        $product->product_profit_price = $request->input('product_profit_price');
        $product->product_compare_to_price = $request->input('product_compare_to_price');
        $product->cost_per_item = $request->input('cost_per_item');
        $product->product_profit_margin = $request->input('profit_margin');
        $product->product_barcode = $request->input('product_barcode');
        $product->product_sku = $request->input('product_sku');
        $product->product_quantity = $request->input('product_quantity');
        $product->product_wheight = $request->input('product_wheight');
        $product->product_height = $request->input('product_height');
        $product->product_carrier = $request->input('product_carrier');
        $product->product_size = $request->input('product_size');
        $product->product_colors = $request->input('product_colors');
        $product->product_colors = $request->input('nb_sales');
        $product->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delet();
    }
}
