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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/principal','pricipalController@index');

Route::get('/p', function () {
    return view('screens/products');
});

Route::get('products/{filter}','ProductController@navbar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users', function (){
    return User::paginate(15);
});
Route::get('/products', function (){
    return Product::with('images')->paginate(100);
});
Route::get('/images', function (){
    return Image::paginate(100);
});
Route::get('/import', 'dataImportController@importUnits');

Route::get('/testemail', function (){
    return 'hello';
})->middleware(['auth','email_verified','mobile_verified']);


Route::get('/tagtest', function (){
    $role = \App\Role::find(3);
    return $role->users ;
})->middleware(['auth','user_is_support']);


//user_is_admin
Route::group(['auth','user_is_admin'],function (){
    // units
    Route::get('units','UnitController@index')->name('units');
    Route::post('units','UnitController@store')->name('units');
    Route::delete('units','UnitController@destroy')->name('units');
    // categories
    Route::get('categories','CategoriesController@index')->name('categories');
    // products
    Route::get('products','ProductController@index')->name('products');
    // tags
    Route::get('tags','TagController@index')->name('tags');
    // TODO : shipment
    // TODO : payments
    // TODO : orders
    // TODO : countries
    Route::get('countries','CountryController@index')->name('countries');
    // cities
    Route::get('cities','CityController@index')->name('cities');
    // states
    Route::get('states','StateController@index')->name('states');
    // reviews
    Route::get('reviews','ReviewController@index')->name('reviews');
    // Contact Support
    Route::get('support','ContactSupportController@index')->name('support');
    // roles
    Route::get('roles','RoleController@index')->name('roles');
});
