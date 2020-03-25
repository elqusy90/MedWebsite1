<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNurseDoctorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nurse_doctor', function (Blueprint $table) {
            $table->primary(['nurse_id', 'doctor_id']);
            $table->unsignedBigInteger('nurse_id');
            $table->unsignedBigInteger('doctor_id');
            $table->timestamps();

            $table->foreign('nurse_id')->references('id')->on('nurses')->onDelete('cascade');
            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nurse_doctor');
    }
}
