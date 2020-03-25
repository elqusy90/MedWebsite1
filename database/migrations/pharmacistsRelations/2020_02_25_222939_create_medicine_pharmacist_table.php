<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinePharmacistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicine_pharmacist', function (Blueprint $table) {
            $table->primary(['medicine_id','pharmacist_id']);

            $table->unsignedBigInteger('medicine_id');
            $table->unsignedBigInteger('pharmacist_id');

            $table->foreign('medicine_id')->references('id')->on('medicines')->onDelete('cascade');
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
        Schema::dropIfExists('medicine_pharmacist');
    }
}
