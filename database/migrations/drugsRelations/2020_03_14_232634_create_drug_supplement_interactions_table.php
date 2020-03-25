<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrugSupplementInteractionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drug_supplement_interactions', function (Blueprint $table) {
            $table->primary(['drug_id', 'supplement_id']);

            $table->unsignedBigInteger('drug_id');
            $table->unsignedBigInteger('supplement_id');

            $table->timestamps();

            $table->foreign('drug_id')->references('id')->on('medicines')->onDelete('cascade');
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
        Schema::dropIfExists('drug_supplement_interactions');
    }
}
