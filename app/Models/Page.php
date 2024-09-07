<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'page_name',
        'title',
        'slug',
        'page_category',
        'position_view',
        'description_part1',
        'description_part2',
        'featured_photo',
        'photo',
        'video',
        'pdf',
        'status',
    ];
}
