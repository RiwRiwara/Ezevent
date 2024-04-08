<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventCollaborators extends Model
{
    use HasFactory;
    public $table = 'event_collaborators';

    protected $fillable = [
        'event_collaborator_id',
        'event_id',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
    
    public static function isUserCollaborator($eventId, $userId)
    {
        return self::where('event_id', $eventId)
            ->where('user_id', $userId)
            ->exists();
    }
}
