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
        Schema::create('information_of_partners', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('phone_number', 10);
            $table->string('user_relationship', 20);
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
        Schema::dropIfExists('information_of_partners');
    }
};
