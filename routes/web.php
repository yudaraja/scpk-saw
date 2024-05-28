<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\RankingController;


Route::get('/', function () {
    return view('landing-page');
});

Route::get('/dashboard', [BeasiswaController::class, 'tampilkanData']);
// Route::get('/search', [RankingController::class, 'search'])->name('search');


Route::get('/beasiswa', [BeasiswaController::class, 'index'])->name('beasiswa.index');
Route::get('/tambahbeasiswa', [BeasiswaController::class, 'tambah'])->name('beasiswa.tambah');
Route::post('/tambahbeasiswa', [BeasiswaController::class, 'store'])->name('beasiswa.store');
Route::delete('/hapusbeasiswa/{id}', [BeasiswaController::class, 'destroy'])->name('beasiswa.destroy');
Route::get('/beasiswa/{id}/edit', [BeasiswaController::class, 'edit'])->name('beasiswa.edit');
Route::post('/beasiswa/{id}', [BeasiswaController::class, 'update'])->name('beasiswa.update');
Route::delete('/myproductsDeleteAll', [App\Http\Controllers\BeasiswaController::class, 'deleteAll'])->name('beasiswa.deleteAll');


Route::get('/ranking', [RankingController::class, 'index'])->name('ranking.index');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/importbeasiswa', [BeasiswaController::class, 'beasiswaimportexcel'])->name('importbeasiswa');
Route::get('/exportbeasiswa', [BeasiswaController::class, 'beasiswaexport'])->name('exportbeasiswa');
