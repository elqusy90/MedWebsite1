<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrugDiseaseInteractionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drug_disease_interactions', function (Blueprint $table) {
            $table->primary(['drug_id', 'disease_id']);

            $table->unsignedBigInteger('drug_id');
            $table->unsignedBigInteger('disease_id');

            $table->timestamps();

            $table->foreign('drug_id')->references('id')->on('medicines')->onDelete('cascade');
            $table->foreign('disease_id')->references('id')->on('diseases')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drug_disease_interactions');
    }
}
