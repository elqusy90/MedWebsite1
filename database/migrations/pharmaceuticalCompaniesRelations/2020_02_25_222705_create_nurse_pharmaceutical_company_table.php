<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNursePharmaceuticalCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nurse_pharmCo', function (Blueprint $table) {
            $table->primary(['nurse_id','pharmCo']);

            $table->unsignedBigInteger('nurse_id');
            $table->unsignedBigInteger('pharmCo');

            $table->foreign('nurse_id')->references('id')->on('nurses')->onDelete('cascade');
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
        Schema::dropIfExists('nurse_pharmaceuticalCompany');
    }
}
