<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');

            $table->string('email')->unique();
            $table->boolean('email_verified')->default(false);

            $table->string('mobile')->nullable();
            $table->boolean('mobile_verified')->default(false);

            $table->string('password');

            $table->bigInteger('shipping_address')->nullable();
            $table->bigInteger('billing_address')->nullable();

            $table->string('api_token')->unique();

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
