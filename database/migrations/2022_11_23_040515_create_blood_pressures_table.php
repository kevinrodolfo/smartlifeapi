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
        Schema::create('blood_pressures', function (Blueprint $table) {
            $table->id();
            $table->integer('beats_per_minute');
            $table->integer('diastolic');
            $table->integer('systolic');
            $table->integer('measurement_unit');
            $table->integer('comparison_to_normal');
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
        Schema::dropIfExists('blood_pressures');
    }
};
