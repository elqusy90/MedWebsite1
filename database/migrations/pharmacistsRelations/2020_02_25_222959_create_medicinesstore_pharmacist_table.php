<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinesstorePharmacistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medStore_pharmacist', function (Blueprint $table) {
            $table->primary(['medStore_id','pharmacist_id']);

            $table->unsignedBigInteger('medStore_id');
            $table->unsignedBigInteger('pharmacist_id');

            $table->foreign('medStore_id')->references('id')->on('medicines_stores')->onDelete('cascade');
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
        Schema::dropIfExists('medicinesstore_pharmacist');
    }
}
