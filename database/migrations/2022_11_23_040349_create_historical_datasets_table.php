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
            $table->float('height',3,2);
            $table->float('weight',6,3);
            $table->float('total_cholesterol',18,15);
            $table->float('total_glucose',18,15);
            $table->string('overall_health');
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
