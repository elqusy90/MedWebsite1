<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientFoodSystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_food_systems', function (Blueprint $table) {
            $table->primary(['patient_id', 'foodsys_id']);
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('foodsys_id');

            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->foreign('foodsys_id')->references('id')->on('food_systems')->onDelete('cascade');
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
        Schema::dropIfExists('patient_food_systems');
    }
}
