<?php

use App\Http\Controllers\MapController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/map', [MapController::class, 'index'])->name('map.index');
Route::get('/map/gempa', [MapController::class, 'gempa'])->name('map.gempa');
