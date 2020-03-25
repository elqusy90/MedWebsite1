<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNursePharmacistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nurse_pharmacist', function (Blueprint $table) {
            $table->primary(['nurse_id','pharmacist_id']);

            $table->unsignedBigInteger('nurse_id');
            $table->unsignedBigInteger('pharmacist_id');

            $table->foreign('nurse_id')->references('id')->on('nurses')->onDelete('cascade');
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
        Schema::dropIfExists('nurse_pharmacist');
    }
}
