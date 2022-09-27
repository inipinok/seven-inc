<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KostController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardKostController;
use App\Http\Controllers\DashboardTransaksiController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WishlistController;
use App\Htp\Controllers\DB;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Kost;

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

// halaman single post
Route::get('kosts/{slug}', [KostController::class, 'singleKost']);
Route::get('kosts', [KostController::class, 'Second']);

Route::get('/', [DashboardController::class, 'index'])->middleware('auth');

Route::get('author/{user:name}', [AuthorController::class, 'index']);

Route::get('categories/{category:slug}', [CategoryController::class, 'index']);
Route::get('categories', [CategoryController::class, 'indek']);
Route::get('kategori', [CategoryController::class, 'kategory']);

// login
Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'authenticate']);
Route::post('logout', [LoginController::class, 'logout']);

Route::get('register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('register', [RegisterController::class, 'store']);

Route::get('dashboard', [AdminController::class, 'index'])->name('admin');

Route::resource('/dashboard/kost', DashboardKostController::class)->except(['edit',])->middleware('auth');
Route::post('/dashboard/kost/{kost:slug}/edit', function (kost $kost) {
    $kos = new DashboardKostController;
    $req = new Request;
    return $kos->update($req, $kost);
});

Route::resource('/dashboard/pembayaran', DashboardTransaksiController::class)->middleware('auth');

Route::resource('/dashboard/wishlist', WishlistController::class)->middleware('auth');