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
        Schema::create('blood_cholesterols', function (Blueprint $table) {
            $table->id();
            $table->integer('hdl');
            $table->integer('ldl');
            $table->integer('total');
            $table->integer('triglyceride');
            $table->integer('measurement_unit');
            $table->string('comparison_to_normal');
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
        Schema::dropIfExists('blood_cholesterols');
    }
};
