<?php

use App\Http\Controllers\CVController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});

Route::resource('cvs', CVController::class);

Route::get('cvs/{cv}/download', [CVController::class, 'download'])->name('cvs.download');