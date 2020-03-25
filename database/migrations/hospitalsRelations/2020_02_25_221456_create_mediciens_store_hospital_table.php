<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediciensStoreHospitalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mediciensStore_hospital', function (Blueprint $table) {
            $table->primary(['mediciensStore_id','hospital_id']);

            $table->unsignedBigInteger('mediciensStore_id');
            $table->unsignedBigInteger('hospital_id');

            $table->foreign('mediciensStore_id')->references('id')->on('medicines_stores')->onDelete('cascade');
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
        Schema::dropIfExists('mediciensStore_hospital');
    }
}
