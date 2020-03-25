<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorPharmaceuticalCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_pharmCo', function (Blueprint $table) {
            $table->primary(['doctor_id', 'pharmCo']);

            $table->unsignedBigInteger('doctor_id');
            $table->unsignedBigInteger('pharmCo');

            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
            $table->foreign('pharmCo')->references('id')->on('pharmaceutical_companies')->onDelete('cascade');

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
        Schema::dropIfExists('doctor_pharmaceuticalCompany');
    }
}
