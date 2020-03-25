<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Resources\ProductResource;
use App\Product;
use App\Review;
use http\Env;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with(['category', 'images'])->paginate(env('PAGINATION_COUNT'));
        $currencyCode = env("CURRENCY_CODE", "$");
        //  return  $products ;
        return view('admin.products.products')->with([
            'products' => ProductResource::collection($products),
            'cur' => $currencyCode
        ]);
    }


    public function search($search)
    {
        $product = Product::query()->where('title', 'LIKE', "%{$search}%")->paginate(15);

        if (isset($_GET['categories'])) {
            $product = Product::query()->where('title', 'LIKE', "%{$search}%")->where('product_gender', $_GET['categories'])->paginate(15);
        } else {
            $product = Product::query()->where('title', 'LIKE', "%{$search}%")->paginate(15);
        }
        if (isset($_GET['color'])) {
            $product = Product::query()->where('title', 'LIKE', "%{$search}%")->where('product_colors', $_GET['color'])->paginate(15);
        } else {
            $product = Product::query()->where('title', 'LIKE', "%{$search}%")->paginate(15);
        }
        if (isset($_GET['brand'])) {
            $product = Product::query()->where('title', 'LIKE', "%{$search}%")->where('product_brand', $_GET['brand'])->paginate(15);
        } else {
            $product = Product::query()->where('title', 'LIKE', "%{$search}%")->paginate(15);
        }
        $products =  ProductResource::collection($product);

        $images = [];
        $temp = [];
        foreach ($products as $product) {
            $temp = json_decode($product->product_images);
            $images[] = $temp[0];
        }
        return view('screens/finalshop')->with(array('products' => $products, 'images' => $images));
    }

    public function filter($filter)
    {
        $category = Category::where('name', $filter)->first();

        if (isset($_GET['categories'])) {
            $product = $category->products()->where('product_gender', $_GET['categories'])->paginate(15);
        } else {
            $product = $category->products()->paginate(15);
        }
        if (isset($_GET['color'])) {
            $product = $category->products()->where('product_colors', $_GET['color'])->paginate(15);
        } else {
            $product = $category->products()->paginate(15);
        }
        if (isset($_GET['brand'])) {
            $product = $category->products()->where('product_brand', $_GET['brand'])->paginate(15);
        } else {
            $product = $category->products()->paginate(15);
        }

        $products = ProductResource::collection($product);
        return view('screens/finalshop', compact('products'));
    }

    public function general()
    {
        $product = Product::paginate(15);
        $products = ProductResource::collection($product);
        return view('screens/finalshop', compact('products'));
    }
    public function singlePage($id)
    {

        $pr = Product::find($id);
        $product = new ProductResource($pr);

        $temp = [];
        $temp = json_decode($product->product_images);

        $avg = Review::where('product_id', $product->id)->avg('stars');

        $category = Category::find($product->category->id);
        $relatedProducts = $category->products()->orderBy('title', 'ASC')->take(4)->get();
        $relatedImages = [];
        $realtedTemp = [];
        foreach ($relatedProducts as $product) {
            $realtedTemp = json_decode($product->product_images);
            $relatedImages[] = $realtedTemp[0];
        }
        $user = Auth::user();
        if ($user != null) {
            return view('screens/productClick', compact('product'))->with([
                'product' => $product,
                'avg_stars' => doubleval(number_format($avg, 2)),
                'user' => $user,
                'relatedProducts' => $relatedProducts,
                'relatedProductsImages' => $relatedImages,
                'images' => $temp
            ]);
        } else {
            return view('screens/productClick', compact('product'))->with([
                'product' => $product,
                'avg_stars' => doubleval(number_format($avg, 2)),
                'relatedProducts' => $relatedProducts,
                'relatedProductsImages' => $relatedImages,
                'images' => $temp
            ]);
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
        $product = new Product();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
