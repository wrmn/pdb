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

Route::get('/', function () {
    return view('home');
});

Route::resource('penduduk', \App\Http\Controllers\PendudukController::class);
Route::resource('keluarga', \App\Http\Controllers\KartuKeluargaController::class);
Route::get('/keluarga/{keluarga}/create', [\App\Http\Controllers\KartuKeluargaController::class, 'create'])->name('anggota-keluarga');
Route::resource('keluarga.anggota', \App\Http\Controllers\AnggotaKeluargaController::class)->only('destroy', 'create', 'store');
Route::get('/laporan/produktif', [\App\Http\Controllers\LaporanController::class, 'productive'])->name('produktif');
Route::get('/laporan/nagari', [\App\Http\Controllers\LaporanController::class, 'index'])->name('nagari');
Route::get('/laporan/nagari/{nagari}', [\App\Http\Controllers\LaporanController::class, 'cariNagari'])->name('nagariCari');
Route::get('/laporan/pendidikan', [\App\Http\Controllers\LaporanController::class, 'educate'])->name('educate');
