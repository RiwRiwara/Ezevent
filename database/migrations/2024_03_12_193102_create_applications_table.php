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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('application_id')->unique()->default(uniqid('application_'));
            $table->string('user_id')->unique();
            $table->string('event_id');
            $table->string('form_id')->nullable();
            $table->string('type')->enum('Participant', 'Staff')->default('Participant');
            $table->string('status')->enum('Pending', 'Approved', 'Rejected', 'Cancelled')->default('Pending');
            $table->text('message')->nullable();

            $table->timestamp('application_date')->default(now());
            $table->timestamp('approved_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
