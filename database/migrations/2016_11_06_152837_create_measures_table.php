<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeasuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('measures', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('date');
            $table->float('total');
            $table->string('user_name');

            $table->unsignedInteger('region_id');
            $table->foreign('region_id')->references('id')->on('regions');

            $table->unsignedInteger('measure_history_id');
            $table->foreign('measure_history_id')->references('id')->on('measures_history');

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
