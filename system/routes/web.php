<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ClientArtikelController;
use App\Http\Controllers\UserController;

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

// Halaman Admin
Route::get('admin/beranda', [HomeController::class, 'showBeranda']);
Route::get('admin/kategori', [HomeController::class, 'showKategori']);
Route::get('registrasi', [AuthController::class, 'registrasi']);
Route::post('registrasi', [AuthController::class, 'store']);

// Halaman Admin 
Route::prefix('admin')->middleware('auth')->group(function(){
Route::post('artikel/filter', [ArtikelController::class, 'filter']);
Route::resource('artikel', ArtikelController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('user', UserController::class);

});


// Halaman Client
Route::get('/', [ClientArtikelController::class, 'index']);
Route::post('/filter', [ClientArtikelController::class, 'filter']);
Route::get('baca/{artikel}', [ClientArtikelController::class, 'create']);
Route::post('baca/{artikel}', [ClientArtikelController::class, 'store']);
Route::get('detail/{artikel}', [ClientArtikelController::class, 'show']);
Route::get('komentar/{artikel}/edit', [ClientArtikelController::class, 'edit']);
Route::put('komentar/{artikel}', [ClientArtikelController::class, 'update']);
Route::delete('komentar/{artikel}', [ClientArtikelController::class, 'destroy']);


// Login section
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'prosesLogin']);
Route::get('logout', [AuthController::class, 'logout']);