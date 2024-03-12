<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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
        'facebook',
        'twitter',
        'instagram',
        'line',
        'website',
        'age_require',
        'limit_participant',

        'content',
        'banner_text_bg',
        'banner_text_color',
        'content_theme',
        'banner_image',
        'thumbnail',


    ];

    public function getStatusColor()
    {
        switch ($this->event_status) {
            case self::EVENT_STATUS_DRAFT:
                return 'bg-gray-5';
            case self::EVENT_STATUS_PUBLISHED:
                return 'bg-success-5';
            case self::EVENT_STATUS_CANCELLED:
                return 'bg-danger-5';
            case self::EVENT_STATUS_ARCHIVED:
                return 'bg-neutral-5';
            default:
                return 'bg-gray-5';
        }
    }


    public function getDateStart()
    {
        return Carbon::parse($this->date_start)->timezone('Asia/Bangkok')->format('M d, Y');
    }

    public function getDateEnd()
    {
        return Carbon::parse($this->date_end)->timezone('Asia/Bangkok')->format('M d, Y');
    }

    public function getTimeStart()
    {
        return Carbon::parse($this->time_start)->timezone('Asia/Bangkok')->format('H:i');
    }

    public function getTimeEnd()
    {
        return Carbon::parse($this->time_end)->timezone('Asia/Bangkok')->format('H:i');
    }

    public function getThumbnail()
    {
        $banner_image_url = config('azure.image.eventimgs') . '/' . $this->banner_image;
        return $this->banner_image ? $banner_image_url : config('azure.default_img.event_banner');
    }

    public function getCategoriesForShow()
    {
        $event_types = $this->categories;
        $event_types = explode(',', $event_types);

        $event_types = collect($event_types)->map(function ($event_type) {
            return EventType::where('id', $event_type)->first()->name_en;
        });

        return $event_types->implode(', ');
    }

    public function getBannerImage()
    {
        $banner_image_url = config('azure.image.eventimgs') . '/' . $this->banner_image;

        return $this->banner_image ? $banner_image_url : config('azure.default_img.event_banner');
    }
}
