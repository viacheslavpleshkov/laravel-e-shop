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
            $table->unsignedInteger('type_id');
            $table->unsignedInteger('category_id');
            $table->integer('price');
            $table->integer('sale');
            $table->string('new');
            $table->integer('trend');
            $table->string('color');
            $table->string('url')->unique();
            $table->unsignedInteger('brand_id');
            $table->unsignedInteger('made_id');
            $table->text('information');
            $table->text('specifications');
            $table->unsignedInteger('user_id');
            $table->integer('status');
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
