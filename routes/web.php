<?php

use App\Http\Controllers\WaterLevelController;

Route::get('/dashboard', [WaterLevelController::class, 'index'])->name('dashboard');
Route::get('/water-level', [WaterLevelController::class, 'getWaterLevel']);
Route::post('/water-level', [WaterLevelController::class, 'store']);
Route::get('/water-level-data', [WaterLevelController::class, 'getWaterLevelData']);
Route::get('/history', [WaterLevelController::class, 'history'])->name('history');
Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');

Route::view('/contact', 'contact')->name('contact');
