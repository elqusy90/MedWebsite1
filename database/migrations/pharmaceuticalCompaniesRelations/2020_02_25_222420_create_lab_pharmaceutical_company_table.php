<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabPharmaceuticalCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab_pharmCo', function (Blueprint $table) {

            $table->primary(['lab_id','pharmCo']);

            $table->unsignedBigInteger('lab_id');
            $table->unsignedBigInteger('pharmCo');

            $table->foreign('lab_id')->references('id')->on('labs')->onDelete('cascade');
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
        Schema::dropIfExists('lab_pharmaceuticalCompany');
    }
}
