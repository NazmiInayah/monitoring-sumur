<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WaterLevelController;

Route::post('/water-level', [WaterLevelController::class, 'store']);
Route::get('/water-level', [WaterLevelController::class, 'getWaterLevel']);
Route::get('/water-level-data', [WaterLevelController::class, 'getWaterLevelData']);
Route::get('/water-level-history', [WaterLevelController::class, 'history']);
