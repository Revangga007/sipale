<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\pengguna\BiodataController;
use App\Http\Controllers\pengguna\DiagnosaController;
use App\Http\Controllers\admin\UbahPasswordController;

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
    Route::resource('gejala', GejalaController::class)->except('show');
    Route::resource('penyakit', PenyakitController::class);
    Route::resource('bp', BasisPengetahuanController::class);
    // Route::resource('pasien', PasienController::class);
    Route::resource('akun', AkunController::class);
    Route::resource('pesan', PesanController::class)->except(['create', 'store', 'edit', 'update']);
    Route::get('password/edit/{id}', [UbahPasswordController::class, 'edit'])->name('pw.edit');
    Route::post('password/edit/{id}', [UbahPasswordController::class, 'update'])->name('pw.update');
});


Route::group(['namespace' => 'pengguna', 'as' => 'pengguna.'], function () {
    Route::get('/', DashboardController::class)->name('dashboard');
    Route::resource('penyakit', PenyakitController::class)->except(['create', 'store', 'edit', 'update', 'delete']);
    Route::resource('pesan', PesanController::class);
    Route::get('biodata', [BiodataController::class, 'index'])->name('biodata.index')->middleware('biodata');
    Route::post('biodata', [BiodataController::class, 'store'])->name('biodata.store');
    Route::get('diagnosa', [DiagnosaController::class, 'index'])->name('diagnosa.index')->middleware('diagnosa');
    Route::get('diagnosa/reset', [DiagnosaController::class, 'reset'])->name('diagnosa.reset')->middleware('diagnosa');
});
