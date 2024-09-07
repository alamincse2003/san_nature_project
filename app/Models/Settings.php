<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Settings extends Model
{
    use HasFactory, HasFactory, SoftDeletes;

    protected $fillable = [
        'app_name',
        'logo',
        'favicon',
        'footer',
        'email',
        'phone',
        'address',
        'social_facebook',
        'social_linkedIn',
        'social_twitter',
        'social_instagram',
        'social_youtube',
        'c_project',
        'client',
        'engineer',
        'experience',
        't_banner',
        'google_map_code',
        'status',
    ];
}
