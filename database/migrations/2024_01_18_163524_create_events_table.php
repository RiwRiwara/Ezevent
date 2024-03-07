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
            $table->string('name')->nullable(); 
            $table->string('description')->nullable();
            $table->string('categories')->nullable(); // 1, 2

            // Contact
            $table->string('contact_email', 50)->nullable();
            $table->string('contact_phone', 15)->nullable();

            // Date
            $table->dateTime('start_date')->nullable(); 
            $table->dateTime('end_date')->nullable(); 
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();

            // Location
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('district')->nullable();
            $table->string('province')->nullable();
            $table->string('zipcode')->nullable();

            // Status
            $table->enum('event_phase', ['Upcoming', 'In progress', 'Reviewing', 'Complete'])->nullable();
            $table->enum('event_status', ['Draft', 'Published', 'Cancelled'])->nullable();
            $table->boolean('is_specific_date')->nullable()->default(false);
            $table->boolean('is_online')->nullable()->default(false);

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

