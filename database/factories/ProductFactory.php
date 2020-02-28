<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title'=>$faker->word ,
        'description'=>$faker->paragraph(5),
        'unit'=>$faker->numberBetween(1,50),
        'price'=>$faker->randomFloat(2,10,500 ),
        'total'=>$faker->numberBetween(2,250),
        'category_id'=>$faker->numberBetween(51,56),
    ];
});


