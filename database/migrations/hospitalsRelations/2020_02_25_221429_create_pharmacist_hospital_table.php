<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePharmacistHospitalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacist_hospital', function (Blueprint $table) {
            $table->primary(['pharmacist_id', 'hospital_id']);
            $table->unsignedBigInteger('pharmacist_id');
            $table->unsignedBigInteger('hospital_id');

            $table->foreign('pharmacist_id')->references('id')->on('pharmacists')->onDelete('cascade');
            $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete('cascade');
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
        Schema::dropIfExists('pharmacist_hospital');
    }
}
