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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('signup');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/card_print', function () {
    return view('card_print');
});
Route::get('/beautician', function () {
    return view('beautician');
});
Route::get('/vanuer', function () {
    return view('vanue');
});
Route::get('/photographer', function () {
    return view('photographer');
});
Route::get('/decorator', function () {
    return view('decorator');
});
Route::get('/caterer', function () {
    return view('caterer');
});
Route::get('/cart', function () {
    return view('cart');
});
