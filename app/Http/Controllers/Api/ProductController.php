<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Http\Resources\ReviewResource;
use App\Product;
use App\Review;
use App\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Integer;
use Request as GlobalRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ProductResource::collection(Product::paginate(10));
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

    public function sale($id)
    {
        return $id;
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
        return new ProductResource(Product::find($id));
    }
    public function review($id)
    {
        $prod = Product::find($id);
        $review = $prod->reviews()->paginate(10);
        return  ReviewResource::collection($review);
    }

    public function allReviews()
    {
        $review = Review::paginate(25);
        return  ReviewResource::collection($review);
    }
    public function filter(Request $request)
    {

        $array = json_decode($request['tab']);
        $allproducts = array();
        //  $category = Category::where('name','Men\'s Sneakers' )->first();
        foreach ($array as $item) {
            $category = Category::where('name', $item)->first();
            array_push($allproducts, $category->products()->paginate(15));
            // return $category->products ;
        }

        return $allproducts;
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
    public function search($search)
    {
        $products = Product::query()->where('title', 'LIKE', "%{$search}%")->get();
        return  ProductResource::collection($products);
    }
    public function sales($id)
    {
        $product = Product::find($id);
        $product->nb_sales += 1;
        $product->save();
        return $product;
    }

    public function flash()
    {

        $product = Product::orderBy('nb_sales', 'DESC')->orderBy('title', 'ASC')->take(6)->get();
        return  ProductResource::collection($product);
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
