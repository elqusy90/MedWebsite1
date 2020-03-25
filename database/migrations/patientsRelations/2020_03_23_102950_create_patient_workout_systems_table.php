<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientWorkoutSystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_workout_systems', function (Blueprint $table) {
            $table->primary(['patient_id', 'workoutsys_id']);
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('workoutsys_id');

            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->foreign('workoutsys_id')->references('id')->on('workout_systems')->onDelete('cascade');
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
        Schema::dropIfExists('patient_workout_systems');
    }
}
