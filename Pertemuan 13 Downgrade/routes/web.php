<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConverterController;

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

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'postlogin'])->name('post.login');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'postregister'])->name('post.register');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('/converter', ConverterController::class)->except(['show']);
Route::get('/converter/database', [ConverterController::class, 'database'])->name('converter.database');
Route::get('/converter/api', [ConverterController::class, 'api'])->name('converter.api');
Route::post('/converter/conversion', [ConverterController::class, 'conversion'])->name('converter.conversion');
