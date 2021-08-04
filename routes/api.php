<?php

use App\Http\Controllers\ApiAuthController;
use App\Http\Controllers\ApiData\ApiPostDataController;
use App\Http\Controllers\ApiDataController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/register', [ApiAuthController::class, 'register']);
Route::post('/login', [ApiAuthController::class, 'login']);
Route::get('/logout', [ApiAuthController::class, 'logout']);
//-----------------------------------------------------------
//-----------------------------------------------------------
Route::get('/getdata/room', [ApiDataController::class, 'room']);
Route::get('/getdata/living', [ApiDataController::class, 'living']);
Route::get('/getdata/kitchen', [ApiDataController::class, 'kitchen']);
Route::get('/getdata/garage', [ApiDataController::class, 'garage']);
Route::get('/getdata/garden', [ApiDataController::class, 'garden']);
Route::get('/getdata/entrance', [ApiDataController::class, 'entrance']);
//------------------------------------------------------------
//------------------------------------------------------------
Route::post('/getdata/room/receive', [ApiPostDataController::class, 'room']);
// Route::post('/getdata/living/receive', [ApiDataController::class, 'livingReceive']);
// Route::post('/getdata/kitchen/receive', [ApiDataController::class, 'kitchenReceive']);
// Route::post('/getdata/garage/receive', [ApiDataController::class, 'garageReceive']);
// Route::post('/getdata/garden/receive', [ApiDataController::class, 'gardenReceive']);
// Route::post('/getdata/entrance/receive', [ApiDataController::class, 'entranceReceive']);
