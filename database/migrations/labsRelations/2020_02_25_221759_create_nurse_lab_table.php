<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNurseLabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nurse_lab', function (Blueprint $table) {
            $table->primary(['lab_id', 'nurse_id']);
            $table->unsignedBigInteger('lab_id');
            $table->unsignedBigInteger('nurse_id');

            $table->foreign('lab_id')->references('id')->on('labs')->onDelete('cascade');
            $table->foreign('nurse_id')->references('id')->on('nurses')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nurse_lab');
    }
}
