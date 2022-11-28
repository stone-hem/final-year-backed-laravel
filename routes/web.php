<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminFirmController;
use App\Http\Controllers\Admin\AdminTechnicianController;
use App\Http\Controllers\Admin\AdminUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Firm\ServiceController;
use App\Http\Controllers\Firm\FirmDetailController;
use App\Http\Controllers\Clerk\ClerkMembersController;
use App\Http\Controllers\Firm\FirmCartController;
use App\Http\Controllers\Firm\FirmDashboardController;
use App\Http\Controllers\Technician\TechnicianCartController;
use App\Http\Controllers\Technician\TechnicianDetailController;
use App\Http\Controllers\Technician\TechnicianServiceController;
use App\Http\Controllers\Technician\TechnicianDashboardController;
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\User\UserFirmController;
use App\Http\Controllers\User\UserInstantController;
use App\Http\Controllers\User\UserServiceController;
use App\Http\Controllers\User\UserTechnicianController;



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
    Route::get('firm/services/edit{id}','edit');
    Route::post('firm/services/update/{id}','update');
    Route::get('firm/services/delete/{id}','destroy');
});

Route::controller(FirmDetailController::class)->group(function(){
    Route::get('firm/details/','index');
    Route::get('firm/details/create','create');
    Route::post('firm/details/store','store');
    Route::get('firm/details/edit','edit');
    Route::post('firm/details/update','update');
});

Route::controller(FirmDashboardController::class)->group(function(){
    Route::get('firm/dashboard/','index');
});

Route::controller(FirmCartController::class)->group(function(){
    Route::get('firm/cart','index');
    Route::get('firm/cart/pending/{id}','pending');
});

//technician
Route::controller(TechnicianDashboardController::class)->group(function(){
    Route::get('technician/dashboard','index');
});

Route::controller(TechnicianServiceController::class)->group(function(){
    Route::get('technician/services','index');
    Route::get('technician/services/create','create');
    Route::post('technician/services/store','store');
    Route::get('technician/services/edit/{id}','edit');
    Route::post('technician/services/update/{id}','update');
    Route::get('technician/services/delete/{id}','destroy');
});

Route::controller(TechnicianDetailController::class)->group(function(){
    Route::get('technician/details/','index');
    Route::get('technician/details/create','create');
    Route::post('technician/details/store','store');
    Route::get('technician/details/edit','edit');
    Route::post('technician/details/update','update');
});

Route::controller(TechnicianCartController::class)->group(function(){
    Route::get('technician/cart','index');
    Route::get('technician/cart/pending/{id}','done');
});

//user
Route::controller(UserDashboardController::class)->group(function(){
    Route::get('user/dashboard','index');
});

Route::controller(UserFirmController::class)->group(function(){
    Route::get('user/firms','index');
    Route::get('user/firms/details/{id}','firm');
    Route::get('user/firms/services/{id}','firm_services');
});

Route::controller(UserTechnicianController::class)->group(function(){
    Route::get('user/technicians','index');
    Route::get('user/technician/details/{id}','technician');
    Route::get('user/technician/services/{id}','technician_services');
});

Route::controller(UserServiceController::class)->group(function(){
    Route::get('user/services','index');
    Route::get('user/services/details/{id}','create');
    Route::get('user/services/store/{id}','store');
    Route::get('user/my-services','view');
    Route::get('user/my-services/cancel/{id}','cancel');
});

Route::controller(UserInstantController::class)->group(function(){
    Route::get('user/instant','index');
    Route::get('user/instant/description/{id}','description');
});


//firm

Route::controller(AdminDashboardController::class)->group(function(){
    Route::get('admin/home','index');
});

Route::controller(AdminFirmController::class)->group(function(){
    Route::get('admin/firms','index');
});

Route::controller(AdminTechnicianController::class)->group(function(){
    Route::get('admin/technicians','index');
});

Route::controller(AdminUserController::class)->group(function(){
    Route::get('admin/users','index');
});