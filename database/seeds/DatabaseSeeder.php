<?php

use App\Address;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 50)->create();
        factory(\App\Product::class, 50)->create();
        factory(\App\Image::class, 50)->create();
        factory(\App\Review::class, 50)->create();
        //factory(\App\Category::class, 38)->create();
        factory(\App\ContactSupport::class, 50)->create();
        factory(\App\WishList::class, 50)->create();
    }
}
