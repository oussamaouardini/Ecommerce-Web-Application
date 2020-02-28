<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title'=>$faker->word ,
        'description'=>$faker->paragraph(5),
        'price'=>$faker->randomFloat(2,10,500 ),
        'category_id'=>$faker->numberBetween(1,20),
    ];
});


