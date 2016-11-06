<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeasuresHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('measures_history', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('product_regions_id');
            $table->foreign('product_regions_id')->references('id')->on('products_regions');

            $table->unsignedInteger('amount');
            $table->float('price');
            $table->float('total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
