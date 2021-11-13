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

//Route::get('/welcome', [App\Http\Controllers\WebController::class, 'welcome'])->name('index');
Route::get('/', 'App\Http\Controllers\WebController@index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'],function(){
//    Route::get("/room", App\Http\Controllers\RoomController::class);
    Route::get('/room/{id}', [App\Http\Controllers\RoomController::class, 'indexAdmin'])->name('roomAdmin');
    Route::resource('booking',App\Http\Controllers\BookingController::class);
    Route::resource('blog',App\Http\Controllers\BlogController::class);
    Route::resource('account',App\Http\Controllers\AccountController::class);
    Route::resource('roomtype',App\Http\Controllers\RoomTypeController::class);
    Route::resource('rooms',App\Http\Controllers\RoomController::class);

});

Route::get('/getroom', [App\Http\Controllers\BookingController::class, 'getRoom'])->name('getRoom');
Route::get('/getroombooking', [App\Http\Controllers\WebController::class, 'getRoomBooking'])->name('getRoomBooking');
Route::get('/getroomdetail', [App\Http\Controllers\RoomController::class, 'getRoomDetail'])->name('getRoomDetail');
Route::get('/detail/{id}', [App\Http\Controllers\BookingController::class, 'detail'])->name('detail');
Route::get('/searchroom', [App\Http\Controllers\WebController::class, 'search_room'])->name('SearchRoom');
Route::post('/storeUser', [App\Http\Controllers\BookingController::class, 'storeUser'])->name('storeUser');
Route::get('/account/destroy/{id}', 'App\Http\Controllers\AccountController@destroy');
Route::get('/blog/destroy/{id}', 'App\Http\Controllers\BlogController@destroy');

Route::get('/about', [App\Http\Controllers\WebController::class, 'about'])->name('about');
Route::get('/blog', [App\Http\Controllers\WebController::class, 'blog'])->name('blog');
Route::get('/contact', [App\Http\Controllers\WebController::class, 'contact'])->name('contact');
Route::get('/explore', [App\Http\Controllers\WebController::class, 'explore'])->name('explore');
Route::get('/gallery', [App\Http\Controllers\WebController::class, 'gallery'])->name('gallery');
Route::get('/index', [App\Http\Controllers\WebController::class, 'index'])->name('/');
//Route::get('/index1', [App\Http\Controllers\WebController::class, 'index1'])->name('index1');
//Route::get('/index2', [App\Http\Controllers\WebController::class, 'index2'])->name('index2');
Route::get('/post/{id}', [App\Http\Controllers\WebController::class, 'post'])->name('post');
Route::get('/restaurant', [App\Http\Controllers\WebController::class, 'restaurant'])->name('restaurant');
Route::get('/room/{id}', [App\Http\Controllers\WebController::class, 'room'])->name('room');
Route::get('/roomdetail/{id}', [App\Http\Controllers\WebController::class, 'roomdetail'])->name('roomdetail');
Route::get('/roomvideo', [App\Http\Controllers\WebController::class, 'roomvideo'])->name('roomvideo');
Route::get('/search', [App\Http\Controllers\WebController::class, 'search'])->name('search');
Route::get('/services', [App\Http\Controllers\WebController::class, 'services'])->name('services');
Route::get('/terms', [App\Http\Controllers\WebController::class, 'terms'])->name('terms');
Route::get('/testimonials', [App\Http\Controllers\WebController::class, 'testimonials'])->name('testimonials');
Route::get('/booking', [App\Http\Controllers\WebController::class, 'booking'])->name('booking');


//Route::get('/post/{id}', [App\Http\Controllers\TestController::class, 'post'])->name('post');





