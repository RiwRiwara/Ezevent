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
        Schema::create('event_participants', function (Blueprint $table) {
            $table->id();
            $table->string('event_participant_id')->unique()->default(uniqid('event_participant_'));
            $table->string('event_id');
            $table->string('user_id')->unique();
            $table->string('role')->enum('Participant', 'Staff')->default('Participant');
            $table->string('position')->nullable();
            $table->string('status')->enum('Normal', 'Cancelled', 'Removed', 'Late')->default('Normal');
            $table->string('progress')->enum ('Pre', 'IsCheckIn', 'IsCheckOut', 'IsReviewed', 'IsCompleted')->default('Pre');


            $table->string('check_in_by')->nullable();
            $table->string('check_out_by')->nullable();
            
            $table->dateTime('check_in_time')->nullable();
            $table->dateTime('check_out_time')->nullable();
            $table->dateTime('review_time')->nullable();
            $table->dateTime('completed_time')->nullable();

            
            $table->string('created_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_participants');
    }
};
