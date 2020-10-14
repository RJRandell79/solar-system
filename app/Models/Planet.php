<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    use HasFactory;

    public function star() {
        return $this->belongsTo(Star::class);
    }

    public function moons() {
        return $this->hasMany(Moon::class);
    }

    public function overview() {
        return $this->hasOne(Overview::class);
    }

    public function features() {
        return $this->morphMany(Features::class, 'featureable');
    }
}
 