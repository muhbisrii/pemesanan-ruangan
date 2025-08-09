<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;

Route::post('/rooms', [RoomController::class, 'store']);
Route::apiResource('rooms', RoomController::class);
