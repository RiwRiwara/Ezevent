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
        Schema::create('inboxes', function (Blueprint $table) {
            $table->bigIncrements('inbox_id'); 
            $table->integer('status')->default(0); 
            $table->enum('inbox_type', ['All', 'Staff', 'Participants'])->nullable(); 
            $table->text('body')->nullable(); 
            // $table->dateTime('send_time')->nullable(); 
            $table->timestamps();

            $table->string('event_id'); //FK event_id from event
            $table->integer('user_recieve_id'); //FK user_id from user

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inboxes');
    }
};
