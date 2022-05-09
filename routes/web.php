<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\SambutanController;
use App\Http\Controllers\SlideController;
use App\Models\Sambutan;
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
Route::resource('/dashboard/kategori', KategoriController::class);
Route::resource('/dashboard/artikel', ArtikelController::class);
Route::resource('/dashboard/playlist', PlaylistController::class);
Route::resource('/dashboard/materi', MateriController::class);
Route::resource('/dashboard/slide', SlideController::class);
Route::resource('/dashboard/banner', BannerController::class);
Route::resource('/dashboard/sambutan', SambutanController::class);