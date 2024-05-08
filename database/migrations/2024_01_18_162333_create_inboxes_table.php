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
            $table->string('inbox_id')->unique()->default(uniqid('inbox_'));
            $table->enum('status', ['Unread', 'Read', 'Deleted'])->nullable();
            $table->enum('inbox_type', ['All', 'Staff', 'Participant'])->nullable();
            $table->text('subject')->nullable(); 
            $table->text('body')->nullable(); 
            // $table->dateTime('send_time')->nullable(); 
            $table->timestamps();

            $table->string('event_id'); //FK event_id from event
            $table->string('user_recieve_id'); //FK user_id from user

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
