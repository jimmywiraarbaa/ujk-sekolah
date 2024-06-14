<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return Redirect::route('index_school');
});

Auth::routes();

Route::get('/school', [App\Http\Controllers\SchoolController::class, 'index_school'])->name('index_school');

Route::middleware(['auth'])->group(function () {
});
