<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientPharmacistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_pharmacist', function (Blueprint $table) {
            $table->primary(['patient_id','pharmacist_id']);

            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('pharmacist_id');

            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
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
        Schema::dropIfExists('patient_pharmacist');
    }
}
