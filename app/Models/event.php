<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $table = 'events';

    use HasFactory;

    // Define constants for event times
    const EVENT_TIME_ANNOUNCE_AFTER = 'announce_after';
    const EVENT_TIME_SPECIFIC = 'specific';

    // Define constants for event venues
    const EVENT_VENUE_VENUE = 'venue';
    const EVENT_VENUE_ONLINE = 'online';

    // Define constants for event phases
    const EVENT_PHASE_INITIAL = 'Initial';
    const EVENT_PHASE_UPCOMING = 'Upcoming';
    const EVENT_PHASE_ONGOING = 'Ongoing';
    const EVENT_PHASE_REVIEWING = 'Reviewing';
    const EVENT_PHASE_COMPLETED = 'Completed';

    // Define constants for event statuses
    const EVENT_STATUS_DRAFT = 'Draft';
    const EVENT_STATUS_PUBLISHED = 'Published';
    const EVENT_STATUS_CANCELLED = 'Cancelled';
    const EVENT_STATUS_ARCHIVED = 'Archived';

    protected $fillable = [
        'event_id',
        'event_name',
        'description',
        'categories',
        'contact_email',
        'contact_phone',
        'event_time',
        'date_start',
        'date_end',
        'time_start',
        'time_end',
        'venue',
        'event_location',
        'placename',
        'district',
        'province',
        'travel_info',
        'room',
        'lat',
        'lng',
        'event_phase',
        'event_status',
        'is_specific_date',
        'is_online',
        'organizer_id',
        'thumbnail',
    ];
}
