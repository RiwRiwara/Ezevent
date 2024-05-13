<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('give_badges', function (Blueprint $table) {
            $table->bigIncrements('give_badge_id'); 
            $table->timestamps();
            $table->integer('badge_id');

            $table->string('user_id'); 
            $table->string('event_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('give_badges');
    }
};
