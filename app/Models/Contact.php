<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Contact extends Model
{
    use HasFactory, HasRoles;
    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'company_name',
        'subject',
        'message',
        'type',
        'seen'
    ];

}
