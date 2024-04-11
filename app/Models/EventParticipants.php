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

    const PROGRESS_PRE = 'Pre';
    const PROGRESS_IS_CHECK_IN = 'IsCheckIn';
    const PROGRESS_IS_CHECK_OUT = 'IsCheckOut';
    const PROGRESS_IS_REVIEWED = 'IsReviewed';
    const PROGRESS_IS_COMPLETED = 'IsCompleted';


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
        'created_by',
        'progress'
    ];



    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }


    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id', 'event_id');
    }


    public static function changeProgress ($eventParticipantId, $progress)
    {
        $userProgress = EventParticipants::where('event_participant_id', $eventParticipantId)->first();
        $userProgress->progress = $progress;
        if ($progress == self::PROGRESS_IS_CHECK_IN) {
            $userProgress->check_in_time = now();
            $userProgress->check_out_time = null;
            $userProgress->review_time = null;
            $userProgress->completed_time = null;
        }

        if ($progress == self::PROGRESS_IS_CHECK_OUT) {
            $userProgress->check_in_time = $userProgress->check_in_time ? $userProgress->check_in_time : now();
            $userProgress->check_out_time = now();
            $userProgress->review_time =  null;
            $userProgress->completed_time = null;
        }

        if ($progress == self::PROGRESS_IS_REVIEWED) {
            $userProgress->check_in_time = $userProgress->check_in_time ? $userProgress->check_in_time : now();
            $userProgress->check_out_time = $userProgress->check_out_time ? $userProgress->check_out_time : now();
            $userProgress->review_time = now();
            $userProgress->completed_time =null;

        }

        if ($progress == self::PROGRESS_IS_COMPLETED) {
            $userProgress->check_in_time = $userProgress->check_in_time ? $userProgress->check_in_time : now();
            $userProgress->check_out_time = $userProgress->check_out_time ? $userProgress->check_out_time : now();
            $userProgress->review_time = $userProgress->review_time ? $userProgress->review_time : now();
            $userProgress->completed_time = now();
        }

        $userProgress->save();
    }


    public static function changeStatus ($eventParticipantId, $status)
    {
        $userStatus = EventParticipants::where('event_participant_id', $eventParticipantId)->first();
        $userStatus->status = $status;
        $userStatus->save();
    }

    

}
