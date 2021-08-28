<?php

use Illuminate\Support\Facades\Route;
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

Auth::routes(['register' => false, 'reset' => false, 'verify' => false]);

Route::group(['prefix' => 'admin', 'namespace' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::get('/', DashboardController::class)->name('dashboard');
    Route::resource('gejala', GejalaController::class);
    Route::resource('penyakit', PenyakitController::class);
    Route::resource('bp', BasisPengetahuanController::class);
    Route::resource('pasien', PasienController::class);
    Route::resource('akun', AkunController::class);
});


Route::group(['namespace' => 'pengguna', 'as' => 'pengguna.'], function () {
    Route::get('/', DashboardController::class)->name('dashboard');
    Route::resource('diagnosis', DiagnosisController::class);
});
