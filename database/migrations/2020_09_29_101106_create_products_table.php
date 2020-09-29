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
            $table->id();
            $table->integer('id_category');
            $table->integer('id_subcategory');
            $table->string('product_code');
            $table->string('product_name');
            $table->integer('product_price');
            $table->integer('product_stock');
            $table->integer('is_recomended');
            $table->string('product_description')->nullable();
            $table->string('product_slug')->nullable();
            $table->string('product_image');
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
