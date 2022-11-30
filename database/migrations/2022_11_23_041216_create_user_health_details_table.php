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
            $table->float('beats_per_minute',18,15);
            $table->float('blood_pressure',18,15);
            $table->float('heart_rate',18,15);
            $table->float('oxygen',5,2);
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
