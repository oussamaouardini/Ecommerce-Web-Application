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
            $table->bigIncrements('id');
            $table->string('title');
            $table->mediumText('description');
            $table->string('product_images')->nullable();
            $table->bigInteger('category_id');
            $table->string('product_gender')->nullable();
            $table->string('product_brand')->nullable();
            $table->string('product_tags')->nullable();
            $table->double('price');
            $table->double('old_price')->nullable();
            $table->double('cost_per_item')->nullable();
            $table->double('profit_margin')->nullable();
            $table->string('product_barcode')->nullable();
            $table->string('product_sku')->nullable();
            $table->integer('product_quantity')->default(50);
            $table->double('product_weight')->nullable();
            $table->double('product_height')->nullable();
            $table->string('product_carrier')->nullable();
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
