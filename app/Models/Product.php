<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Product extends Model
{
    use HasFactory, HasRoles;
    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'category_id',
        'description_part1',
        'description_part2',
        'featured_photo',
        'photo',
        'status',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id')->withDefault();
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id')->withDefault();
    }
}
