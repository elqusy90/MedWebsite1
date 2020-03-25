<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrugDrugInteractionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drug_drug_interactions', function (Blueprint $table) {
            $table->primary(['drug_id', 'other_drug_id']);

            $table->unsignedBigInteger('drug_id');
            $table->unsignedBigInteger('other_drug_id');

            $table->timestamps();

            $table->foreign('drug_id')->references('id')->on('medicines')->onDelete('cascade');
            $table->foreign('other_drug_id')->references('id')->on('medicines')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drug_drug_interactions');
    }
}
