<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::get('/register',[LoginController::class,'register'])->name('register');
Route::post('/login-proses',[LoginController::class,'login_proses'])->name('login-proses');
Route::post('/register-proses',[LoginController::class,'register_proses'])->name('register-proses');

Route::get('/encyclopedia',[Controller::class,'encyclopedia'])->name('encyclopedia');

Route::get('/',[Controller::class,'index'])->name('index');
