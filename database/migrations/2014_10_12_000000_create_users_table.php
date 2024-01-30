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
            $table->integer('user_id')->nullable();
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('email', 50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->enum('gender', ['female', 'male', 'LGBTQ+'])->nullable();
            $table->dateTime('date_of_birth');
            $table->string('mobile_number');
            $table->string('address_1');
            $table->string('Province');
            $table->string('Dsitinct');
            $table->string('postid', 5);
            $table->string('personality', 4)->nullable();;
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

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
