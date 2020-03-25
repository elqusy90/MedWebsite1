<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediciensStorePharmaceuticalCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mediciensStore_pharmCo', function (Blueprint $table) {
            $table->primary(['medStore_id', 'pharmCo_id']);
            $table->unsignedBigInteger('medStore_id');
            $table->unsignedBigInteger('pharmCo_id');

            $table->foreign('medStore_id')->references('id')->on('medicines_stores')->onDelete('cascade');
            $table->foreign('pharmCo_id')->references('id')->on('pharmaceutical_companies')->onDelete('cascade');

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
        Schema::dropIfExists('mediciensStore_PharmaceuticalCompany');
    }
}
