<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            // information
            $table->id(); 
            $table->string('event_id')->unique();
            $table->string('event_name')->nullable(); 
            $table->string('description')->nullable();
            $table->string('categories')->nullable(); // 1, 2

            // Contact
            $table->string('contact_email', 50)->nullable();
            $table->string('contact_phone', 15)->nullable();
            
            // Date
            $table->enum('event_time', ['announce_after', 'specific'])->nullable();
            $table->dateTime('date_start')->nullable(); 
            $table->dateTime('date_end')->nullable(); 
            $table->time('time_start')->nullable();
            $table->time('time_end')->nullable();

            // Location
            $table->enum('venue', ['venue', 'online'])->nullable();
            $table->string('event_location')->nullable();
            $table->string('placename')->nullable();
            $table->string('district')->nullable();
            $table->string('province')->nullable();
            $table->string('travel_info')->nullable();
            $table->string('room')->nullable();
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();

            // Status
            $table->enum('event_phase', ['Initial','Upcoming', 'Ongoing', 'Reviewing', 'Complete', 'Archived'])->nullable();
            $table->enum('event_status', ['Draft', 'Published', 'Cancelled'])->nullable();
            $table->boolean('is_specific_date')->nullable()->default(false);
            $table->boolean('is_online')->nullable()->default(false);
            $table->boolean('is_deleted')->nullable()->default(false);
            

            // Organizer
            $table->string('organizer_id'); 

            // Image
            $table->string('thumbnail')->nullable();

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

