<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediciensStoreLabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mediciensStore_lab', function (Blueprint $table) {
            $table->primary(['mediciensStore_id', 'lab_id']);
            $table->unsignedBigInteger('mediciensStore_id');
            $table->unsignedBigInteger('lab_id');

            $table->foreign('mediciensStore_id')->references('id')->on('medicines_stores')->onDelete('cascade');
            $table->foreign('lab_id')->references('id')->on('labs')->onDelete('cascade');

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
        Schema::dropIfExists('mediciensStore_lab');
    }
}
