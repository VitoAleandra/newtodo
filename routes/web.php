<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PpdbController;
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

Route::get('/bayar', [UserController::class, 'pembayaran']);
Route::get('/', [PpdbController::class, 'landing']);   
Route::get('/login', [PpdbController::class, 'login']);
Route::get('/regist', [PpdbController::class, 'register']);
Route::post('/store', [UserController::class, 'store'])->name('store');
