<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    public $table = 'forms';
    use HasFactory;

    const FORM_TYPE_ALL = 'All';
    const FORM_TYPE_STAFF = 'Staff';
    const FORM_TYPE_PARTICIPANTS = 'Participants';

    protected $fillable = [
        'form_id',
        'event_id',
        'form_type',
        'form_title',
        'form_description',
        'status',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id', 'event_id');
    }

    public function questions()
    {
        return $this->hasMany(Question::class, 'form_id', 'form_id');
    }

    public function applications()
    {
        return $this->hasMany(Application::class, 'form_id', 'form_id');
    }


}
