<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ContactSupport;
use Faker\Generator as Faker;

$factory->define(ContactSupport::class, function (Faker $faker) {
    return [
        'user_id' =>$faker->numberBetween(1,50),
        'order_id'=>$faker->numberBetween(1,50),
        'title'=>$faker->sentence,
        'message'=>$faker->paragraph(6),
        'status'=>$faker->randomElement(['pending','closed','waiting']),
        'support_type_id'=>$faker->numberBetween(1,4),
    ];
});
