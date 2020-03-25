<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiseaseSupplementInteractionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disease_supplement_interactions', function (Blueprint $table) {
            $table->primary(['disease_id', 'supplement_id']);

            $table->unsignedBigInteger('disease_id');
            $table->unsignedBigInteger('supplement_id');

            $table->timestamps();

            $table->foreign('disease_id')->references('id')->on('diseases')->onDelete('cascade');
            $table->foreign('supplement_id')->references('id')->on('supplements')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disease_supplement_interactions');
    }
}
