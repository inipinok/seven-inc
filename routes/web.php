<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KostController;
use App\Htp\Controllers\DB;
use App\Models\Category;
use App\Models\User;

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
    return view('index');
});
Route::get('shop', function () {
    return view('shop');
});
Route::get('booking', function () {
    return view('booking');
});
Route::get('checkout', function () {
    return view('checkout');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('putriceria', function () {
    return view('putriceria');
});
Route::get('about', function () {
    return view('about');
});
Route::get('pondokputri', function() {
    return view('pondokputri');
});
Route::get('putribantul', function () {
    return view('putribantul');
});
Route::get('inikost', function () {
    return view('inikost');
});
Route::get('omahkost', function () {
    return view('omahkost');
});
Route::get('kostputra', function () {
    return view('kostputra');
});
Route::get('putrabantul', function () {
    return view('putrabantul');
});
Route::get('khususputra', function () {
    return view('khususputra');
});
Route::get('kostkita', function () {
    return view('kostkita');
});
Route::get('account', function () {
    return view('account');
});

Route::get('kost', [KostController::class, 'index']);
Route::get('kosts', [KostController::class, 'Second']);

// halaman single post
Route::get('kosts/{slug}', [KostController::class, 'singleKost']);

Route::get('/', [DashboardController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
