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
        Schema::create('historical_datasets', function (Blueprint $table) {
            $table->id();
            $table->integer('age');
            $table->timestamp('date');
            $table->integer('height');
            $table->integer('weight');
            $table->integer('total_cholesterol');
            $table->integer('total_glucose');
            $table->integer('overall_health');
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
        Schema::dropIfExists('historical_datasets');
    }
};
