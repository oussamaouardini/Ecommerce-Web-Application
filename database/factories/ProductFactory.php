<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title'=>$faker->word ,
        'description'=>$faker->paragraph(5),
        'price'=>$faker->randomFloat(2,10,500 ),
        'category_id'=>$faker->numberBetween(1,33),
        'gender'=>$faker->randomElement(['man','woman','child']),
        'product_sku'=>'06668',
        'product_brand'         =>$faker->randomElement(['Adidas','Nike','Reebok','NewBalance']),
        'old_price'     =>$faker->randomFloat(2,10,500 ),
        'product_barcode'       =>'ABC-abc-1234' ,
        'product_weight'        =>'1.2' ,
        'product_height'        =>'166' ,
        'product_carrier'       =>'ABC-abc-1234' ,
        'product_size'          =>2.5 ,
        'product_colors'        =>'black' ,
        ];
});


