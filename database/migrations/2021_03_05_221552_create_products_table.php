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
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('exposure');
            $table->string('title');
            $table->unsignedBigInteger('winery_id');
            $table->string('qtda_per_carton');
            $table->unsignedBigInteger('uf_id');
            $table->string('region');
            $table->string('classification');
            $table->string('description');
            $table->string('type_of_grape');
            $table->string('harvest');
            $table->string('temperature');

            $table->string('graduate');
            $table->string('volume');
            $table->string('measures');
            $table->string('weight');

            $table->string('olfactory');
            $table->string('visual');
            $table->string('taste');
            $table->string('harmonization');
            $table->string('image');
            $table->timestamps();

            $table->foreign('uf_id')->references('id')->on('countries');
            $table->foreign('winery_id')->references('id')->on('suppliers');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('exposure')->references('id')->on('exposure');
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
