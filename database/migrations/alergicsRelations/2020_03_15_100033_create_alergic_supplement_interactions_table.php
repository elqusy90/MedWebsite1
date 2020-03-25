<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlergicSupplementInteractionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alergic_supplement_interactions', function (Blueprint $table) {
            $table->primary(['alergic_id', 'supplement_id']);

            $table->unsignedBigInteger('alergic_id');
            $table->unsignedBigInteger('supplement_id');

            $table->timestamps();

            $table->foreign('alergic_id')->references('id')->on('alergics')->onDelete('cascade');
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
        Schema::dropIfExists('alergic_supplement_interactions');
    }
}
