<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Service extends Model
{
    use HasFactory;
    use HasRoles;

    protected $fillable = [
        'service_name',
        'title',
        'heading',
        'short_text',
        'long_text',
        'description',
        'video',
        'photo',
        'status',
    ];

}
