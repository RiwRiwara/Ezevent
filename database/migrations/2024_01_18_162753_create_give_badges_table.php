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
            // $table->dateTime('give_date');
            $table->timestamps();

            $table->integer('user_id'); //FK user_id from user
            $table->integer('badge_id'); //FK badge_id from badge
            $table->integer('event_id'); //FK event_id from event
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
