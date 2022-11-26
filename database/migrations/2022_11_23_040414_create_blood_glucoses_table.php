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
        Schema::create('blood_glucoses', function (Blueprint $table) {
            $table->id();
            $table->float('measurement',18,15);
            $table->string('measurement_unit');
            $table->string('context_measurement');
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
        Schema::dropIfExists('blood_glucoses');
    }
};
