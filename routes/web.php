<?php

use App\Http\Controllers\Clerk\ClerkMembersController;
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

Route::controller(ClerkMembersController::class)->group(function(){
    Route::get('clerk-members','index');
        Route::get('clerk-add-members','create');
        Route::post('store-members','store');
});
