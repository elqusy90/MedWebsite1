<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrugAlergicCuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drug_alergic_cures', function (Blueprint $table) {
            $table->primary(['drug_id', 'alergic_id']);

            $table->unsignedBigInteger('drug_id');
            $table->unsignedBigInteger('alergic_id');

            $table->timestamps();

            $table->foreign('drug_id')->references('id')->on('medicines')->onDelete('cascade');
            $table->foreign('alergic_id')->references('id')->on('alergics')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drug_alergic_cures');
    }
}
