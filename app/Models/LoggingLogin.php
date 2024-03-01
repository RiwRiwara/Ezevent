<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoggingLogin extends Model
{
    public $table = 'logging_logins';
    use HasFactory;
}
