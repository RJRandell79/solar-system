<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moon extends Model
{
    use HasFactory;

    public function planet() {
        return $this->belongsTo(Planet::class);
    }

    public function features() {
        return $this->morphMany(Features::class, 'featureable');
    }

    public function environment() {
        return $this->hasOne(Environment::class);
    }

    public function atmosphere() {
        return $this->hasOne(Atmosphere::class);
    }
}
