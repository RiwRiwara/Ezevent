<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventParticipants extends Model
{
    use HasFactory;
    public $table = 'event_participants';
    
    const ROLE_PARTICIPANT = 'Participant';
    const ROLE_STAFF = 'Staff';

    const STATUS_NORMAL = 'Normal';
    const STATUS_CANCELLED = 'Cancelled';
    const STATUS_REMOVED = 'Removed';
    const STATUS_LATE = 'Late';

    protected $fillable = [
        'event_participant_id',
        'event_id',
        'user_id',
        'role',
        'position',
        'status',
        'is_check_in',
        'is_check_out',
        'check_in_by',
        'check_out_by',
        'check_in_time',
        'check_out_time',
        'created_by'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

}
