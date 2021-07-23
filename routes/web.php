<?php

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

Auth::routes(['register' => false, 'reset' => false, 'verify' => false]);

Route::group(['prefix' => 'admin', 'namespace' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::get('/', DashboardController::class)->name('dashboard');
    Route::resource('gejala', GejalaController::class);
    Route::resource('penyakit', PenyakitController::class);
    Route::resource('bp', BasisPengetahuanController::class);
    Route::get('lg', [BasisPengetahuanController::class, 'lg'])->name('lg');
    Route::get('lp', [BasisPengetahuanController::class, 'lp'])->name('lp');
    Route::resource('berita', BeritaController::class);
});


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
