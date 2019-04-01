<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('name');
            $table->string('images');
            $table->string('description');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('category_id');
            $table->bigInteger('price');
            $table->bigInteger('sale');
            $table->string('new');
            $table->bigInteger('trend');
            $table->string('color');
            $table->string('url')->unique();
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('made_id');
            $table->text('information');
            $table->text('specifications');
            $table->unsignedBigInteger('user_id');
            $table->bigInteger('status');
            $table->timestamps();

            $table->foreign('type_id')->references('id')->on('types');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('made_id')->references('id')->on('mades');
            $table->foreign('user_id')->references('id')->on('users');
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
