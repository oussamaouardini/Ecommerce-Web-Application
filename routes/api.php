<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Get Category
Route::get('categories', 'Api\CategoryController@index');
Route::get('categories/{id}', 'Api\CategoryController@show');
Route::get('categories/{id}/products', 'Api\CategoryController@products');
// Get Tags

Route::get('tags', 'Api\TagController@index');
Route::get('tags/{id}', 'Api\TagController@show');
// Get Products
Route::get('products', 'Api\ProductController@index');
Route::get('products/{id}', 'Api\ProductController@show');

// product review
Route::get('product/{id}/review', 'Api\ProductController@review');

/// general routes

Route::get('countries', 'Api\CountryController@index');
Route::get('countries/{id}', 'Api\CountryController@show');
Route::get('countries/{id}/cities', 'Api\CountryController@showCities');
Route::get('countries/{id}/states', 'Api\CountryController@showStates');

// Search
Route::get('products/search/{search}', 'Api\ProductController@search');

// flash sales
Route::get('products/sales/{id}', 'Api\ProductController@sales');
Route::get('products/product/sales', 'Api\ProductController@flash');

Route::post('auth/register', 'Api\AuthController@register');
Route::post('auth/login', 'Api\AuthController@login');

// filter
Route::post('filter', 'Api\ProductController@filter');

Route::middleware(['auth:api'])->group(function () {
    // cart
    Route::post('carts', 'Api\CartController@addProductToCart');
    Route::get('carts', 'Api\CartController@index');
    Route::post('carts/{id}/remove', 'Api\CartController@RemoveProductFromCart');
    Route::get('currentuser/{id}', 'Api\UserController@show');


    /// Likes
    Route::get('wishuser/{id}', 'Api\WishController@show');
    Route::post('removewishuser/{id}/{id_product}', 'Api\WishController@remove');
    Route::post('addwishuser/{id}/{id_product}', 'Api\WishController@add');

    // user
    Route::post('edituser/{id}', 'Api\UserController@edit');
    Route::get('getuser/{id}', 'Api\UserController@show');

    // payments
    Route::get('charge/{amount}', 'PaymentController@charge');
});

Route::get('sale/{id}', 'Api\ProductController@sale');


///////////////////////////////////////////////////////////// DESKTOP ////////////////////////////////////////////////////////////////////////////////////////////////
/// NB PRODUCTS
Route::get('allproducts', 'Api\Desktop\ProductController@index');
Route::post('addProduct', 'Api\Desktop\ProductController@store');
Route::post('editProduct/{id}', 'Api\Desktop\ProductController@update');
Route::post('hideProduct/{id}', 'Api\Desktop\ProductController@hide');
Route::post('deleteProduct/{id}', 'Api\Desktop\ProductController@destroy');

Route::get('review', 'Api\Desktop\ProductController@allReviews');
Route::post('replayed/{id}', 'Api\Desktop\ProductController@replayReview');
Route::post('deleteReview/{id}', 'Api\Desktop\ProductController@deleteReview');

Route::get('nbproducts', 'Api\Desktop\ProductController@allProducts');
Route::get('allcategories', 'Api\Desktop\ProductController@categories');
