<?php

namespace App\Models;

use App\Models\Tab;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model {
    use HasFactory;

    public function tab() {
        return $this->belongsTo( Tab::class, 'tab_id' );
    }
}
