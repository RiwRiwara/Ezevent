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
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('event_id'); 
            $table->string('event_name', 50); 
            $table->string('event_category', 50); 
            $table->string('event_event', 50)->unique(); 
            $table->dateTime('start_date')->nullable(); 
            $table->string('time', 50); 
            $table->string('number_people', 50); 
            $table->dateTime('end_date')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
