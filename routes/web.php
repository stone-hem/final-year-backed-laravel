<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Firm\ServiceController;
use App\Http\Controllers\Firm\FirmDetailController;
use App\Http\Controllers\Clerk\ClerkMembersController;
use App\Http\Controllers\Firm\FirmDashboardController;
use App\Http\Controllers\Technician\TechnicianDetailController;
use App\Http\Controllers\Technician\TechnicianServiceController;
use App\Http\Controllers\Technician\TechnicianDashboardController;
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\User\UserFirmController;

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

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::get('homepage',[HomeController::class,'index']);

//firm
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

Route::controller(FirmDashboardController::class)->group(function(){
    Route::get('firm/dashboard/','index');
});

//technician
Route::controller(TechnicianDashboardController::class)->group(function(){
    Route::get('technician/dashboard','index');
});

Route::controller(TechnicianServiceController::class)->group(function(){
    Route::get('technician/services','index');
    Route::get('technician/services/create','create');
    Route::post('technician/services/store','store');
    Route::get('technician/services/edit','edit');
    Route::post('technician/services/update','update');
});

Route::controller(TechnicianDetailController::class)->group(function(){
    Route::get('technician/details/','index');
    Route::get('technician/details/create','create');
    Route::post('technician/details/store','store');
});

//user
Route::controller(UserDashboardController::class)->group(function(){
    Route::get('user/dashboard','index');
});

Route::controller(UserFirmController::class)->group(function(){
    Route::get('user/firms','index');
});

