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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->unique();
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('email', 50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->enum('gender', [1, 2, 3, 4])->nullable();
            $table->dateTime('date_of_birth');
            $table->string('mobile_number', 15)->unique();
            $table->string('role_id')->default(2);
            $table->string('address')->max(255);
            $table->string('city')->nullable();
            $table->string('district')->nullable();
            $table->string('province')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('personality', 4)->nullable();
            $table->string('profile_img')->nullable();
            $table->text('short_bio')->nullable();
            $table->text('description')->nullable();
            $table->string('sub_img_1')->nullable();
            $table->string('sub_img_2')->nullable();
            $table->string('sub_img_3')->nullable();
            $table->string('facebook')->nullable();
            $table->string('line')->nullable();
            $table->string('instagram')->nullable();
            $table->string('address_2')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
