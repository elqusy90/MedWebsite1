<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorPharmacistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_pharmacist', function (Blueprint $table) {
            $table->primary(['doctor_id','pharmacist_id']);

            $table->unsignedBigInteger('doctor_id');
            $table->unsignedBigInteger('pharmacist_id');

            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
            $table->foreign('pharmacist_id')->references('id')->on('pharmacists')->onDelete('cascade');

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
        Schema::dropIfExists('doctor_pharmacist');
    }
}
