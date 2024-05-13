<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavedEvents extends Model
{
    use HasFactory;

    protected $table = 'saved_events';
    protected $fillable = [
        'user_id',
        'event_id'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id', 'event_id');
    }

    
}
