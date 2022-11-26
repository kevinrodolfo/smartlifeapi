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
            $table->float('hdl',18,15);
            $table->float('ldl',18,15);
            $table->float('total',18,15);
            $table->float('triglyceride',18,15);
            $table->string('measurement_unit');
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
        Schema::dropIfExists('blood_cholesterols');
    }
};
