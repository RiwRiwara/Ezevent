<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    public $table = 'applications';

    const APPLICATION_STATUS_PENDING = 'Pending';
    const APPLICATION_STATUS_APPROVED = 'Approved';
    const APPLICATION_STATUS_REJECTED = 'Rejected';
    const APPLICATION_STATUS_CANCELLED = 'Cancelled';


    protected $fillable = [
        'application_id',
        'user_id',
        'event_id',
        'form_id',
        'status',
        'message',
        'application_date',
        'approved_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id', 'event_id');
    }

    public function form()
    {
        return $this->belongsTo(Form::class, 'form_id', 'form_id');
    }

    public function applicationStatusColor()
    {
        switch ($this->status) {
            case self::APPLICATION_STATUS_PENDING:
                return 'warning';
            case self::APPLICATION_STATUS_APPROVED:
                return 'success';
            case self::APPLICATION_STATUS_REJECTED:
                return 'danger';
            case self::APPLICATION_STATUS_CANCELLED:
                return 'secondary';
            default:
                return 'secondary';
        }
    }



}
