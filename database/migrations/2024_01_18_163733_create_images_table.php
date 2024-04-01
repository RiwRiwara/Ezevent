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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('image_id')->unique()->default(uniqid('image_')); 
            $table->string('image_alt', 255)->nullable(); 
            $table->string('src', 255); 
            $table->string('image_type', 255)->nullable(); 
            $table->timestamps();

            $table->string('user_upload_id'); //FK user_id from user
            $table->integer('event_id'); //FK event_id from event
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
