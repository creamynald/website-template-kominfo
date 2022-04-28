<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\SlideController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [FrontendController::class, 'index']);
Route::get('/detail-artikel/{slug}', [FrontendController::class, 'detail'])->name('detail-artikel');

Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::resource('kategori', KategoriController::class);
Route::resource('artikel', ArtikelController::class);
Route::resource('playlist', PlaylistController::class);
Route::resource('materi', MateriController::class);
Route::resource('slide', SlideController::class);
Route::resource('banner', BannerController::class);