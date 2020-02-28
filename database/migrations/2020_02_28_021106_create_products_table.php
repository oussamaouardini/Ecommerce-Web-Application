<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->string('product_title');
            $table->mediumText('product_description');
            $table->string('product_images');
            $table->string('product_category');
            $table->string('gender');
            $table->string('product_brand');
            $table->string('product_tags');
            $table->double('product_profit_price');
            $table->double('product_compare_to_price');
            $table->double('cost_per_item');
            $table->double('profit_margin');
            $table->string('product_barcode');
            $table->string('product_sku');
            $table->integer('product_quantity')->default(50);
            $table->double('product_wheight');
            $table->double('product_height');
            $table->string('product_carrier');
            $table->double('product_size')->nullable();
            $table->string('product_colors')->nullable();
            $table->integer('nb_sales')->default(0);
            $table->boolean('hided')->default(false);
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
