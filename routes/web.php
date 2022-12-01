<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminFirmController;
use App\Http\Controllers\Admin\AdminReportController;
use App\Http\Controllers\Admin\AdminTechnicianController;
use App\Http\Controllers\Admin\AdminUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Firm\ServiceController;
use App\Http\Controllers\Firm\FirmDetailController;
use App\Http\Controllers\Clerk\ClerkMembersController;
use App\Http\Controllers\Firm\FirmCartController;
use App\Http\Controllers\Firm\FirmDashboardController;
use App\Http\Controllers\Firm\FirmInstantController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\Technician\TechnicianCartController;
use App\Http\Controllers\Technician\TechnicianDetailController;
use App\Http\Controllers\Technician\TechnicianServiceController;
use App\Http\Controllers\Technician\TechnicianDashboardController;
use App\Http\Controllers\Technician\TechnicianInstantController;
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

Route::controller(FirmInstantController::class)->group(function(){
    Route::get('firm/instant','index');
    Route::get('firm/instant/accept/{id}','accept');
    Route::get('firm/instant/reject{id}','reject');
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

Route::controller(TechnicianInstantController::class)->group(function(){
    Route::get('technician/instant','index');
    Route::get('technician/instant/accept','accept');
    Route::get('technician/instant/reject','reject');
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
    Route::get('user/my-instant','instant');
    Route::get('user/instant/description/{id}','description');
    Route::post('user/instant/description/post/{id}','store');
    Route::get('user/instant/delete/{id}','destroy');
});


//admin

Route::controller(AdminDashboardController::class)->group(function(){
    Route::get('admin/home','index');
});

Route::controller(AdminFirmController::class)->group(function(){
    Route::get('admin/firms','index');
});

Route::controller(AdminTechnicianController::class)->group(function(){
    Route::get('admin/technicians','index');
});

Route::controller(AdminReportController::class)->group(function(){
    Route::get('admin/reports','index');
});

Route::controller(PdfController::class)->group(function(){
    Route::get('pdf/users','users');
    Route::get('pdf/firms','firms');
    Route::get('pdf/technicians','technicians');
    Route::get('pdf/services','services');
});