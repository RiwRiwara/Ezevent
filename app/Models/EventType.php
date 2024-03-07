<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
    public $table = 'event_types';
    use HasFactory;

    protected $fillable = [
        'name_th',
        'name_en',
        'description',
        'icon',
    ];
}
