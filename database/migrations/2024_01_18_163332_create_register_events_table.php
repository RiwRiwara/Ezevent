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
        Schema::create('register_events', function (Blueprint $table) {
            $table->bigIncrements('resgister_event_id'); 
            $table->string('register_type', 50); 
            // $table->dateTime('register_date')->nullable(); 
            $table->string('status', 50)->nullable(); 
            $table->string('role', 50)->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register_events');
    }
};
