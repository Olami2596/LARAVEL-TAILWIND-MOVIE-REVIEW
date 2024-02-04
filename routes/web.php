<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('movies.index');
});

Route::resource('movies', MovieController::class)
    ->only(['index', 'show']);

Route::resource('movies.reviews', ReviewController::class)
    ->scoped(['review' => 'movie'])
    ->only(['create', 'store']);