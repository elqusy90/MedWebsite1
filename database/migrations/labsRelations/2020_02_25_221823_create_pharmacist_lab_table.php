<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePharmacistLabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacist_lab', function (Blueprint $table) {
            $table->primary(['pharmacist_id', 'lab_id']);
            $table->unsignedBigInteger('lab_id');
            $table->unsignedBigInteger('pharmacist_id');


            $table->foreign('lab_id')->references('id')->on('labs')->onDelete('cascade');
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
        Schema::dropIfExists('pharmacist_lab');
    }
}
