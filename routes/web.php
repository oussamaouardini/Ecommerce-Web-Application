<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\City;
use App\Country;
use App\Image;
use App\Product;
use App\User;


// Search
Route::get('products/search/{search}', 'ProductController@search');

Route::get('/creditCard', 'CartController@page');

// remove product from cart
Route::get('/creditCard/remove/{id}', 'CartController@remove');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/shopFinal/{filter}', 'ProductController@filter');
Route::get('/shopFinal-single/{id}', 'ProductController@singlePage');
Route::get('/shopFinal/search/{search}', 'ProductController@search');

// log in
Route::get('/newlogin', function () {
    return view('screens/login');
})->name('newlogin');

// registration

Route::get('/registration', function () {
    return view('screens/registration');
})->name('registration');

// comment
Route::Post('/addComment', 'ReviewController@store')->name('addComment');

// addToCart
Route::Post('/addToCart', 'CartController@addProductToCart')->name('addToCart');
Route::Post('/addToCartAjax', 'CartController@addProductToCartAjax')->name('addToCartAjax');

// like
Route::get('removewishuser/{id}/{id_product}', 'WishListController@remove');

Route::get('addwishuser/{id}/{id_product}', 'WishListController@add');





Route::get('/shopFinal/', function () {
    // return view('screens/finalshop');

    $products = Product::paginate(15);
    foreach ($products as $product) {
        $temp = json_decode($product->product_images);
        $images[] = $temp[0];
    }
    return view('screens/finalshop')->with(array('products' => $products, 'images' => $images));
});
Route::get('/product', function () {
    return view('screens/productClick');
});

Route::get('/newlogin', function () {
    return view('screens/login');
});

Route::get('/registration', function () {
    return view('screens/registration');
});

Route::get('/produit', function () {
    return view('screens/product');
});

Route::get('/principal', 'pricipalController@index');



Route::get('products/{filter}', 'ProductController@navbar');


// man
Route::get('products/man', 'ProductController@navbar');
// woman
Route::get('products/woman', 'ProductController@navbar');
// child
Route::get('products/child', 'ProductController@navbar');

// contact
Route::get('contact-message', 'ContactSupportController@contact');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users', function () {
    return User::paginate(15);
});
Route::get('/products', function () {
    return Product::with('images')->paginate(100);
});
Route::get('/images', function () {
    return Image::paginate(100);
});
Route::get('/import', 'dataImportController@importUnits');

Route::get('/testemail', function () {
    return 'hello';
})->middleware(['auth', 'email_verified', 'mobile_verified']);


Route::get('/tagtest', function () {
    $role = \App\Role::find(3);
    return $role->users;
})->middleware(['auth', 'user_is_support']);


//user_is_admin
Route::group(['auth'], function () {

    Route::post('carts', 'CartController@addProductToCart');
    // units
    Route::get('units', 'UnitController@index')->name('units');
    Route::post('units', 'UnitController@store')->name('units');
    Route::delete('units', 'UnitController@destroy')->name('units');
    // categories
    Route::get('categories', 'CategoriesController@index')->name('categories');
    // products
    Route::get('products', 'ProductController@index')->name('products');
    // tags
    Route::get('tags', 'TagController@index')->name('tags');
    //TODO: card
    Route::get('mycard', function () {
        return view('screens/myCard');
    });
    // TODO : payments and shipping
    Route::post('checkAll', 'CartController@submit');
    //    Route::get('checkout',function(){
    //        return view('screens/checkout');
    //    });
    Route::get('checkout', 'CheckOutController@index');
    // Route::get('webCharge', 'CheckOutController@webCharge');
    Route::get('payment', 'PaymentController@index');
    Route::get('charge/{amount}/{id}', 'PaymentController@charge');
    Route::post('chargeWeb', 'PaymentController@chargeWeb');
    Route::get('paymentsuccess/{id}', 'PaymentController@payment_success');
    Route::get('paymentsuccessWeb', 'PaymentController@payment_successWeb');
    Route::get('paymenterror', 'PaymentController@payment_error');
    // TODO : States and Countries
    Route::get('country/{country}/states', 'CountryController@getStates');
    // TODO : Wishlist
    Route::get('wishlist', function () {
        return view('screens/wishlist');
    });
    // TODO : orders
    // TODO : countries
    Route::get('countries', 'CountryController@index')->name('countries');
    // cities
    Route::get('cities', 'CityController@index')->name('cities');
    // states
    Route::get('states', 'StateController@index')->name('states');
    // reviews
    Route::get('reviews', 'ReviewController@index')->name('reviews');
    // Contact Support
    Route::get('support', 'ContactSupportController@index')->name('support');
    // roles
    Route::get('roles', 'RoleController@index')->name('roles');
});
