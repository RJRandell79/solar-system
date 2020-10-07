<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlanetController;
use App\Models\Planet;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/planet/{planet:name}', [PlanetController::class, 'index']);
