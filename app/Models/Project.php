<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Project extends Model
{
    use HasFactory, HasRoles;
    protected $fillable = [
        'short_title',
        'title',
        'slug',
        'description1',
        'description2',
        'banner_photo',
        'photo',
        'project_type',
        'icon',
        'status',
    ];
}
