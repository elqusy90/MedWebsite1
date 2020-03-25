<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiseaseFoodInteractionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disease_food_interactions', function (Blueprint $table) {
            $table->primary(['disease_id', 'food_id']);

            $table->unsignedBigInteger('disease_id');
            $table->unsignedBigInteger('food_id');

            $table->timestamps();

            $table->foreign('disease_id')->references('id')->on('diseases')->onDelete('cascade');
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
        Schema::dropIfExists('disease_food_interactions');
    }
}
