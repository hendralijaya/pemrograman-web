<?php

use App\Http\Controllers\DashboardWebsiteController;
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

Route::get('/beranda',[DashboardWebsiteController::class, 'index'])->name('web.index');
//PETA + VISUALISASI
Route::get('/petajumlahpenduduk',[DashboardWebsiteController::class, 'petaJumlahPenduduk'])->name('web.jumlahpenduduk');
Route::get('/petajumlahpengangguran',[DashboardWebsiteController::class, 'petaJumlahPengangguran'])->name('web.jumlahpengangguran');
Route::get('/petajumlahpendudukmiskin',[DashboardWebsiteController::class, 'petaJumlahPendudukMiskin'])->name('web.jumlahpendudukmiskin');
Route::get('/petaangkaharapanhidup',[DashboardWebsiteController::class, 'petaAngkaHarapanHidup'])->name('web.angkaharapanhidup');


Route::get('/kesimpulan', [DashboardWebsiteController::class, 'kesimpulan'])->name('web.kesimpulan');

Route::get('/tentang-kami', [DashboardWebsiteController::class, 'about'])->name('web.about');
