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
            $table->string('category_id');
            $table->string('title');
            $table->string('winery_id');
            $table->string('qtda_per_carton');
            $table->string('country_of_origin');
            $table->string('region');
            $table->string('classification');
            $table->string('description');
            $table->string('type_of_grape');
            $table->string('harvest');
            $table->string('temperature');
            $table->string('olfactory');
            $table->string('visual');
            $table->string('taste');
            $table->string('harmonization');
            $table->string('image');
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
