<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'],function(){
    //Route::get("/room", App\Http\Controllers\RoomController::class);
    Route::get('/room', [App\Http\Controllers\RoomController::class, 'indexAdmin'])->name('roomAdmin');
    Route::resource('booking',App\Http\Controllers\BookingController::class);
    Route::resource('blog',App\Http\Controllers\BlogController::class);
    Route::resource('account',App\Http\Controllers\AccountController::class);
});

Route::get('/getroom', [App\Http\Controllers\BookingController::class, 'getRoom'])->name('getRoom');







