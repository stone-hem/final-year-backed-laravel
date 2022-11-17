<?php

use App\Http\Controllers\Api\ApiFirmController;
use App\Http\Controllers\Api\ApiServiceController;
use App\Http\Controllers\Api\ApiTechnicianController;
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
    Route::get('flutter/services/create/{id}','create');
    Route::post('flutter/services/store/{id}','store');
    Route::get('flutter/services/view/{id}','view');
});

Route::controller(ApiTechnicianController::class)->group(function(){
    Route::get('flutter/technicians','index');
    Route::get('flutter/technicians/{id}','technician');
    Route::get('flutter/technicians/services/{id}','technician_services');
});

Route::controller(ApiFirmController::class)->group(function(){
    Route::get('flutter/firms','index');
    Route::get('flutter/firms/{id}','firm');
    Route::get('flutter/firms/services/{id}','firm_services');
});
