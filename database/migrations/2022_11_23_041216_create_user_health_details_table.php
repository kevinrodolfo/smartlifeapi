<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_health_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('blood_cholesterol_id')->constrained('blood_cholesterols');
            $table->foreignId('blood_glucouse_id')->constrained('blood_glucoses');
            $table->foreignId('blood_pressure_id')->constrained('blood_pressures');
            $table->foreignId('body_height_id')->constrained('body_heights');
            $table->foreignId('body_weight_id')->constrained('body_weights');
            $table->timestamp('measurement_date');
            $table->foreignId('user_id')->constrained('user_profiles');
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
        Schema::dropIfExists('user_health_details');
    }
};
