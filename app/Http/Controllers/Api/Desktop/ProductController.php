<?php

namespace App\Http\Controllers\Api\Desktop;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Http\Resources\DesktopReviewRes;
use App\Product;
use App\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\Desktop\Input;
use App\Http\Resources\CategoryResource;
use App\User;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $stock = ProductResource::collection(Product::paginate(20));
        // return response()->json($stock);
        $stock = Product::paginate(20);
        return $stock->getCollection();
    }

    public function allReviews()
    {
        $review = DesktopReviewRes::collection(Review::paginate(25)->where("replied", 0));
        return response()->json($review);
    }

    public function replayReview($id)
    {
        $review = Review::find($id);
        $review->replied = 1;
        $review->save();
        return 200;
    }

    public function deleteReview($id)
    {
        $review = Review::find($id);
        $review->delete();
        return 200;
    }

    public function allProducts()
    {
        $products =  Product::all();
        $nb = 0;
        foreach ($products as $product) {
            $nb += $product->nb_sales;
        }
        return [
            'nbproducts' => Product::all()->count(),
            'nbusers'    => User::all()->count(),
            'nbsales'    => $nb,
            'women' => Product::all()->where('product_gender', 'Woman')->count(),
            'men' => Product::all()->where('product_gender', 'Man')->count(),
            'kids' => Product::all()->where('product_gender', 'Kids')->count(),
            'access' => Product::all()->where('product_gender', 'Access')->count(),
        ];
    }
    public function categories()
    {
        return CategoryResource::collection(Category::all());
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
        $product->title = $request->input('product_title');
        $product->description = $request->input('product_description');
        $product->product_images = $request->input('product_images');
        $product->category_id = $request->input('product_category');
        $product->product_gender = $request->input('product_gender');
        $product->product_brand = $request->input('product_brand');
        $product->product_tags = $request->input('product_tags');
        $product->price = $request->input('product_profit_price');
        $product->old_price = $request->input('product_compare_to_price');
        $product->cost_per_item = $request->input('cost_per_item');
        $product->profit_margin = $request->input('product_profit_margin');
        $product->product_barcode = $request->input('product_barcode');
        $product->product_sku = $request->input('product_sku');
        $product->product_quantity = $request->input('product_quantity');
        $product->product_weight = $request->input('product_weight');
        $product->product_height = $request->input('product_height');
        $product->product_carrier = $request->input('product_carrier');
        $product->product_size = $request->input('product_size');
        $product->product_colors = $request->input('product_colors');
        $product->local = $request->input('local');
        $product->save();
        return $product;

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
        $product->title = $request->input('product_title');
        $product->description = $request->input('product_description');
        $product->product_images = $request->input('product_images');
        $product->category_id = $request->input('product_category');
        $product->product_gender = $request->input('product_gender');
        $product->product_brand = $request->input('product_brand');
        $product->product_tags = $request->input('product_tags');
        $product->price = $request->input('product_profit_price');
        $product->old_price = $request->input('product_compare_to_price');
        $product->cost_per_item = $request->input('cost_per_item');
        $product->profit_margin = $request->input('product_profit_margin');
        $product->product_barcode = $request->input('product_barcode');
        $product->product_sku = $request->input('product_sku');
        $product->product_quantity = $request->input('product_quantity');
        $product->product_weight = $request->input('product_weight');
        $product->product_height = $request->input('product_height');
        $product->product_carrier = $request->input('product_carrier');
        $product->product_size = $request->input('product_size');
        $product->product_colors = $request->input('product_colors');
        $product->local = $request->input('local');
        $product->save();
        return $product;
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
        $product->delete();
    }
}
