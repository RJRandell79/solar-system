<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Star extends Model
{
    use HasFactory;

    public function planets() {
        return $this->hasMany(Planet::class);
    }

    public function environment() {
        return $this->hasOne(Environment::class);
    }
}
