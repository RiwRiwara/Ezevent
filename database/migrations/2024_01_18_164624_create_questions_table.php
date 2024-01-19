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
            $table->bigIncrements('question_id'); 
            $table->string('question', 255); 
            $table->string('question_type', 50); 
            // $table->dateTime('created_at'); 
            // $table->dateTime('updated_at'); 
            $table->integer('status'); 
            $table->text('answer'); 
            $table->integer('score'); 
            $table->timestamps();

            $table->string('form_id'); //FK form_id from from
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
