<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\WishList;
use Faker\Generator as Faker;

$factory->define(WishList::class, function (Faker $faker) {
    return [
        'user_id'=>$faker->numberBetween(1,50),
        'product_id'=>$faker->numberBetween(1,50),
    ];
});
