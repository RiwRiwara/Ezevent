<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
    public $table = 'badges';
    use HasFactory;

    protected $fillable = [
        'id',
        'name_th',
        'name_en',
        'description',
        'icon',
    ];

    
}
