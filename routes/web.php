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
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\UserAdminController;
use App\Http\Controllers\UserPemilikController;
use App\Http\Controllers\CartController;
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

// ---------------------- halaman single post -------------------------
Route::get('kosts/{slug}', [KostController::class, 'singleKost']);
Route::get('kosts', [KostController::class, 'Second']);
// -------------------------------- end ------------------------------

// ---------------------- dashboard customer -------------------------
Route::get('/', [DashboardController::class, 'index'])->middleware('auth');
// -------------------------------- end ------------------------------

// ------------------------------ author -----------------------------
Route::get('author/{user:name}', [AuthorController::class, 'index']);
// -------------------------------- end ------------------------------

// ---------------------- category dasboard -------------------------
Route::get('categories/{category:slug}', [CategoryController::class, 'index']);
Route::get('categories', [CategoryController::class, 'indek']);
Route::get('kategori', [CategoryController::class, 'kategory']);
// -------------------------------- end ------------------------------

// ----------------------------- login -------------------------------
Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'authenticate']);
Route::post('logout', [LoginController::class, 'logout']);
// -------------------------------- end ------------------------------

// ---------------------------- register -----------------------------
Route::get('register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('register', [RegisterController::class, 'store']);
// -------------------------------- end ------------------------------

// ------------------------------ admin ------------------------------
Route::get('dashboard', [AdminController::class, 'index'])->name('admin')->middleware(['role:admin' , 'role:pemilik']);
// -------------------------------- end ------------------------------

// ---------------------- kost admin/pemilik -------------------------
Route::resource('/dashboard/kost', DashboardKostController::class)->middleware('auth');
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
// -------------------------------- end ------------------------------

// --------------------------- cart -----------------------------
Route::get('cart/', [CartController::class, 'index']);
// Route::get('checkout', [CartController::class, 'checkout']);
Route::post('tambah_cart/', [CartController::class, 'store']);
Route::post('tambah_cart/{id}', [CartController::class, 'destroy']);
// -------------------------------- end ------------------------------


Route::resource('dashboard/user-admin', UserAdminController::class)->middleware('auth');
Route::resource('dashboard/user-pemilikkos', UserPemilikController::class)->middleware('auth');
