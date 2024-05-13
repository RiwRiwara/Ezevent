<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventBadge extends Model
{
    public $table = 'event_badges';

    use HasFactory;


    protected $fillable = [
        'event_id',
        'badge_1',
        'badge_2',
        'badge_3',
        'badge_4',
    ];
}
