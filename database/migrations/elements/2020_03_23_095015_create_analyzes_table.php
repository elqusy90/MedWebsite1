<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalyzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analyzes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->float('reference');
            $table->float('value');
            $table->string('unit');
            $table->string('img_directory');
            $table->unsignedBigInteger('patient_id');
            $table->timestamps();

            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('analyzes');
    }
}
