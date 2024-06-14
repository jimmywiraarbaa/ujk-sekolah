<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return Redirect::route('index_school');
});

Auth::routes();

Route::get('/smk5padang', [App\Http\Controllers\SchoolController::class, 'index_school'])->name('index_school');
Route::get('/smk5padang/profile', [App\Http\Controllers\SchoolController::class, 'index_profile'])->name('index_profile');
Route::get('/smk5padang/ektrakurikuler', [App\Http\Controllers\SchoolController::class, 'index_ekstrakurikuler'])->name('index_ekstrakurikuler');
Route::get('/smk5padang/galeri', [App\Http\Controllers\SchoolController::class, 'index_gallery'])->name('index_gallery');
Route::get('/smk5padang/berita', [App\Http\Controllers\SchoolController::class, 'index_news'])->name('index_news');
Route::get('/smk5padang/prestasi', [App\Http\Controllers\SchoolController::class, 'index_prestasi'])->name('index_prestasi');


Route::middleware(['auth'])->group(function () {
});
