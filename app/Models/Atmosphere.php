<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atmosphere extends Model
{
    use HasFactory;

    public function planet() {
        return $this->belongsTo(Planet::class);
    }

    public function moon() {
        return $this->belongsTo(Moon::class);
    }
}
