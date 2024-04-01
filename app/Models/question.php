<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public $table = 'questions';
    use HasFactory;

    protected $fillable = [
        'question_id',
        'form_id',
        'is_required',
        'question_type',
        'question',
        'question_label',
        'question_placeholder',
        'question_image',
        'options',
        'answer',
        'correct_answer',
        'status',
        'created_by'
    ];
}
