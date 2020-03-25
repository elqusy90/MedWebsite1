<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabHospitalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab_hospital', function (Blueprint $table) {
            $table->primary(['lab_id', 'hospital_id']);
            $table->unsignedBigInteger('lab_id');
            $table->unsignedBigInteger('hospital_id');

            $table->foreign('lab_id')->references('id')->on('labs')->onDelete('cascade');
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
        Schema::dropIfExists('lab_hospital');
    }
}
