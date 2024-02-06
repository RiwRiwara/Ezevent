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
        Schema::create('logging_logins', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('user-agent')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('login_type')->nullable();
            $table->string('login_status')->nullable();
            $table->dateTime('login_time')->nullable();
            $table->dateTime('logout_time')->nullable();
            $table->string('logout_type')->nullable();
            $table->string('logout_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logging_logins');
    }
};
