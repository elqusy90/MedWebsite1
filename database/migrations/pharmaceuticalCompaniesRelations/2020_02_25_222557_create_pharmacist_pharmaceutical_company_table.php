<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePharmacistPharmaceuticalCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacist_pharmCo', function (Blueprint $table) {
            $table->primary(['pharmacist_id','pharmCo']);

            $table->unsignedBigInteger('pharmacist_id');
            $table->unsignedBigInteger('pharmCo');

            $table->foreign('pharmacist_id')->references('id')->on('pharmacists')->onDelete('cascade');
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
        Schema::dropIfExists('pharmacist_pharmaceuticalCompany');
    }
}
