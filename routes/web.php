<?php

use App\Http\Controllers\Clerk\ClerkMembersController;
use App\Http\Controllers\Firm\FirmDetailController;
use App\Http\Controllers\Firm\ServiceController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('homepage',[HomeController::class,'index']);

Route::controller(ServiceController::class)->group(function(){
    Route::get('firm/services','index');
    Route::get('firm/services/create','create');
    Route::post('firm/services/store','store');
    Route::get('firm/services/edit','edit');
    Route::post('firm/services/update','update');
});

Route::controller(FirmDetailController::class)->group(function(){
    Route::get('firm/details/','index');
    Route::get('firm/details/create','create');
    Route::post('firm/details/store','store');
});