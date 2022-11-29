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
        Schema::create('recommended_health_values', function (Blueprint $table) {
            $table->id();
            $table->float('beats_per_minute',18,15);
            $table->float('blodd_pressure',18,15);
            $table->float('moisture',18,15);
            $table->float('oxygen',5,2);
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
        Schema::dropIfExists('recommended_health_values');
    }
};
