<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Environment extends Model
{
    use HasFactory;

    public function planet() {
        return $this->belongsTo(Planet::class);
    }

    public function moon() {
        return $this->belongsTo(Moon::class);
    }

    public function star() {
        return $this->belongsTo(Star::class);
    }
}
