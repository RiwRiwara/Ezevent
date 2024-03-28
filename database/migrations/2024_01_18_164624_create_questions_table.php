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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('question_id')->unique()->default(uniqid('question_'));
            $table->string('form_id');
            $table->boolean('is_required');
            $table->string('question_type')->enum('short_ansewer', 'long_answer', 'multiple_choice', 'checkbox', 'file_upload', 'image');

            $table->string('question');
            $table->string('question_label');
            $table->string('question_placeholder');
            $table->string('question_image')->nullable();

            $table->string('options')->nullable();
            $table->string('answer')->nullable();
            $table->string('correct_answer')->nullable();
            
            $table->string('status');
            $table->string('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
