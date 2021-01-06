<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderBookingController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/', function () {
    return view('signup');
});
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/login', function () {
    return view('auth/login');
})->name('login');
Route::get('/register', function () {
    return view('auth/register');
})->name('register');
Route::get('/index', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('/layouts/about');
});
Route::get('/gallery', function () {
    return view('/layouts/gallery');
});
Route::get('/card_print', function () {
    return view('/layouts/card_print');
});
Route::get('/beautician', function () {
    return view('/layouts/beautician');
});
Route::get('/venue', function () {
    return view('/layouts/venue');
});
Route::get('/photographer', function () {
    return view('/layouts/photographer');
});
Route::get('/decorator', function () {
    return view('/layouts/decorator');
});
Route::get('/caterer', function () {
    return view('/layouts/caterer');
});
Route::get('/cart', function () {
    return view('/layouts/cart');
});
Route::get('/form', function () {
    return view('/layouts/form');
});
Route::get('/dreamwaver_booking', function () {
    return view('/layouts/dreamwaver_booking');
});
Route::post('book',[OrderBookingController::class,'index'])->name('OrderBookingController.book');
//Route::get('/events/ict_olympiad_selected', function () {
//    $io = OrderBooking::where('selected','True')->get();
//    return view('front_end/selected_io')->with('ios',$io);
//})->name('selected_io');
