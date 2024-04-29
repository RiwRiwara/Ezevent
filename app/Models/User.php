<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable  implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;
    public $table = 'users';

    const ROLE_ADMIN = 1;
    const ROLE_ORGANIZER = 2;
    const ROLE_PARTICIPANT = 3;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'mobile_number',
        'email',
        'password',
        'date_of_birth',
        'address',
        'province',
        'district',
        'city',
        'zipcode',
        'email_verified_at',
        'role_id',
        'gender',
        'short_bio',
        'personality',
        'facebook',
        'line',
        'instagram',
        'profile_img',
        'sub_img_1',
        'sub_img_2',
        'sub_img_3',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class, 'organizer_id', 'user_id');
    }

    public function activeEvents()
    {
        return $this->hasMany(Event::class, 'organizer_id', 'user_id')
            ->where('is_deleted', false);
    }


    public function profileImg()
    {
        $profile_image_url = config('azure.image.userprofile') . '/' . $this->profile_img;
        
        return $this->profile_img ? $profile_image_url : config('azure.default_img.userprofile');
    }

    public function eventParticipants()
    {
        return $this->hasMany(EventParticipants::class, 'user_id', 'user_id');
    }

    public function eventCollaborators()
    {
        return $this->hasMany(EventCollaborators::class, 'user_id', 'user_id');
    }



}
