<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlergicFoodInteractionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alergic_food_interactions', function (Blueprint $table) {
            $table->primary(['alergic_id', 'food_id']);

            $table->unsignedBigInteger('alergic_id');
            $table->unsignedBigInteger('food_id');

            $table->timestamps();

            $table->foreign('alergic_id')->references('id')->on('alergics')->onDelete('cascade');
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
        Schema::dropIfExists('alergic_food_interactions');
    }
}
