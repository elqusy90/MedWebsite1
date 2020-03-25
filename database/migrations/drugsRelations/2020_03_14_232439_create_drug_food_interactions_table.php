<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrugFoodInteractionsTable extends Migration
{

    public function up()
    {
        Schema::create('drug_food_interactions', function (Blueprint $table) {
            $table->primary(['drug_id', 'food_id']);

            $table->unsignedBigInteger('drug_id');
            $table->unsignedBigInteger('food_id');

            $table->timestamps();

            $table->foreign('drug_id')->references('id')->on('medicines')->onDelete('cascade');
            $table->foreign('food_id')->references('id')->on('foods')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drug_food_interactions');
    }
}
