<?php

use App\Http\Controllers\Api\ApiServiceController;
use App\Http\Controllers\Api\ApiUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login',[ApiUserController::class,'login']);
Route::post('register',[ApiUserController::class,'register']);

Route::controller(ApiServiceController::class)->group(function(){
    Route::get('flutter/services','index');
});
