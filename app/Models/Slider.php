<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Slider extends Model
{
    use HasFactory;
    use HasRoles;

    protected $fillable = [
        'title',
        'sub_title',
        'description_part1',
        'description_part2',
        'button_name',
        'button_url',
        'position',
        'slider_photo',
        'status',
    ];

}
