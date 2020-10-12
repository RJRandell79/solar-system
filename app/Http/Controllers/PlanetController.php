<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use Illuminate\Http\Request;

class PlanetController extends Controller
{
    public function index($planetname) {
        return view('planet', [
            'planet' => Planet::where('name', $planetname)->firstOrFail(),
            'allplanets' => Planet::all()
        ]);
    }
}
