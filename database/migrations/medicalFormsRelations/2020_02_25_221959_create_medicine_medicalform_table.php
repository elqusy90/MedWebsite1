<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicineMedicalformTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicine_medicalform', function (Blueprint $table) {
            $table->primary(['medicine_id','medicalform_id']);
            $table->unsignedBigInteger('medicine_id');
            $table->unsignedBigInteger('medicalform_id');

            $table->foreign('medicine_id')->references('id')->on('medicines')->onDelete('cascade');
            $table->foreign('medicalform_id')->references('id')->on('medical_forms')->onDelete('cascade');
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
        Schema::dropIfExists('medicine_medicalform');
    }
}
