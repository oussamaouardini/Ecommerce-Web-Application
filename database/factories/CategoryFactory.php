<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['Running', 'Tennis', 'Fishing', 'Cardio', 'Swimming', 'Surfing', 'menSweater', 'menFootwar', 'menPants', 'menPants', 'womenSweater', 'womenFootwar', 'womenPants', 'womenT-Shirts', 'womenSneakers', 'childSweater', 'womenPants', 'childT-Shirts', 'HOODIES', 'Adidas', 'Nike', 'Puma', 'Reebook', 'SHIRTS', 'SNEAKERS', 'HOODIES', 'PANTS', 'ACCESORIES']),
    ];
});
