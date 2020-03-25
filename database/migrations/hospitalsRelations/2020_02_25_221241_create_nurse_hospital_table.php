<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNurseHospitalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nurse_hospital', function (Blueprint $table) {
            $table->primary(['nurse_id', 'hospital_id']);
            $table->unsignedBigInteger('nurse_id');
            $table->unsignedBigInteger('hospital_id');

            $table->foreign('nurse_id')->references('id')->on('nurses')->onDelete('cascade');
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
        Schema::dropIfExists('nurse_hospital');
    }
}
