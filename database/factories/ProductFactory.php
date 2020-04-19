<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'description' => $faker->paragraph(5),
        'price'          => $faker->randomFloat(2, 10, 500),
        'category_id'    => $faker->numberBetween(1, 33),
        'product_gender' => $faker->randomElement(['Man', 'Woman', 'Kid']),
        'product_images' => $faker->randomElement([
            '["11202004181247427984.jpg","21202004181252476420.jpg","22202004181252476430.jpg"]',
            '["23202004181252476440.jpg","31202004181334568474.jpg","31202004181334568474.jpg"]',
            '["32202004181334568484.jpg","33202004181334568494.jpg","41202004181344339630.jpg"]',
            '["42202004181344339640.jpg","43202004181344339650.jpg","51202004181347325455.jpg"]',
            '["52202004181347325475.jpg","53202004181347325485.jpg","12345.jpg"]'
        ]),
        'product_sku'           => 'BLU-SHT-SM',
        'product_brand'         => $faker->randomElement(['Adidas', 'Nike', 'Reebok', 'NewBalance']),
        'old_price'             => $faker->randomFloat(2, 10, 500),
        'cost_per_item'             => $faker->randomFloat(2, 10, 500),
        'profit_margin'             => $faker->randomFloat(2, 10, 500),
        'product_barcode'       => '12434875412',
        'product_weight'        => 10.2,
        'product_height'        => 20,
        'product_tags'        => $faker->name,
        'product_carrier'       => 'DHL',
        'product_size'          => 2.5,
        'product_colors'        => 'black',
    ];
});
