<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcessPlantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('process_plant', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('plant_id')->unsigned()->index();
            $table->foreign('plant_id')->references('id')->on('plants')->onDelete('cascade');
            $table->integer('process_id')->unsigned()->index();
            $table->foreign('process_id')->references('id')->on('processes')->onDelete('cascade');
            $table->integer('employee_id')->unsigned()->index();
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
            $table->integer('quantity');
            $table->integer('loss_id')->unsigned()->index();
            $table->foreign('loss_id')->references('id')->on('losses')->onDelete('cascade');
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
        Schema::dropIfExists('process_plant');
    }
}
