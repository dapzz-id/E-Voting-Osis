<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\Kandidat1Controller;
use App\Http\Controllers\Kandidat2Controller;
use App\Http\Controllers\Kandidat3Controller;
use App\Http\Controllers\login;
use App\Http\Controllers\register;
use App\Http\Controllers\ResetPasswordController;
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

Route::get('/', function () {
    return view('index');
})->name('login')->middleware('guest');
Route::post('/login', [login::class, 'auth']);
Route::post('/logout', [login::class, 'logout']);
Route::get('/register', [register::class, 'index'])->name('register');
Route::post('/registers', [register::class, 'store']);

Route::get('/admin', [login::class, 'showAdminDashboard'])->name('admin.dashboard')->middleware(['auth', 'admin']);
Route::get('/Pemilihan', [login::class, 'showUserDashboard'])->name('dashboard')->middleware('auth');

// kandidat1
Route::get('/kandidat1', [DashboardController::class, 'kandidat1'])->name('kandidat1')->middleware('auth');
Route::get('/kandidat2', [DashboardController::class, 'kandidat2'])->name('kandidat1')->middleware('auth');
Route::get('/kandidat3', [DashboardController::class, 'kandidat3'])->name('kandidat1')->middleware('auth');
Route::post('/kandidats1', [Kandidat1Controller::class, 'input'])->middleware('auth');
Route::post('/kandidats2', [Kandidat2Controller::class, 'input'])->middleware('auth');
Route::post('/kandidats3', [Kandidat3Controller::class, 'input'])->middleware('auth');
Route::get('/after', [DashboardController::class, 'after'])->name('after')->middleware('auth');

// daftar
Route::get('/daftar_1', [DashboardController::class, 'daftar1'])->name('daftar_1')->middleware(['auth','admin']);
Route::get('/daftar_2', [DashboardController::class, 'daftar2'])->name('daftar_2')->middleware(['auth','admin']);
Route::get('/daftar_3', [DashboardController::class, 'daftar3'])->name('daftar_3')->middleware(['auth','admin']);

Route::get('/forgot-password', [ForgotPasswordController::class, 'showForm']);
Route::post('/forgot-password', [ForgotPasswordController::class, 'processForm']);
Route::get('/reset-password', [ResetPasswordController::class, 'showForm']);
Route::post('/reset-password', [ResetPasswordController::class, 'reset']);