<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalPharmaceuticalCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital_pharmCo', function (Blueprint $table) {
            $table->primary(['hospital_id','pharmCo']);

            $table->unsignedBigInteger('hospital_id');
            $table->unsignedBigInteger('pharmCo');

            $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete('cascade');
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
        Schema::dropIfExists('hospital_pharmaceuticalCompany');
    }
}
