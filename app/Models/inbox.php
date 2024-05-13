<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inbox extends Model
{
    public $table = 'inboxes';

    use HasFactory;

    protected $fillable = [
        'inbox_id',
        'status',
        'inbox_type',
        'subject',
        'body',
        'created_at',
        'updated_at',
        'event_id',
        'user_recieve_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_recieve_id', 'user_id');
    }

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id', 'event_id');
    }
}
