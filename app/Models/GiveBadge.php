<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiveBadge extends Model
{
    public $table = 'give_badges';
    use HasFactory;

    protected $fillable = [
        'give_badge_id',
        'badge_id',
        'user_id',
        'event_id',
        'created_at',
        'updated_at',
    ];
}
