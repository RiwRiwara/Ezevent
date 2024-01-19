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
        Schema::create('event_badges', function (Blueprint $table) {
            $table->bigIncrements('event_id'); 
            $table->integer('badge_1')->nullable(); 
            $table->integer('badge_2')->nullable(); 
            $table->integer('badge_3')->nullable(); 
            $table->integer('badge_4')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_badges');
    }
};
