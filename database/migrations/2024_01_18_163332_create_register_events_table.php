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
            $table->string('register_type', 50); #ประเภทงาน
            // $table->dateTime('register_date')->nullable(); 
            $table->enum('status', ['check-in', 'check-out'])->nullable(); # check-in/check-out
            $table->enum('role', ['staff', 'Participants'])->nullable(); # staff/participants
            $table->enum('confirm', ['Approve', 'Reject'])->nullable(); #
            $table->timestamps();

            $table->integer('user_id'); //FK user_id from user
            $table->string('event_id'); //FK event_id from event
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
