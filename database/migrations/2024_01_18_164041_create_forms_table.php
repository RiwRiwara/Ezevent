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
        Schema::create('forms', function (Blueprint $table) {
            $table->bigIncrements('form_id'); 
            $table->string('form_name'); 
            $table->enum('form_type', ['all', 'staff', 'participants']);
            // $table->dateTime('created_at'); 
            // $table->dateTime('updated_at'); 
            $table->integer('status'); 
            $table->timestamps();
            
            $table->string('event_id'); //FK event_id from event
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
