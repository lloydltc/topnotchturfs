<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::post('send-email', [\App\Http\Controllers\HomeController::class,'sendMail'])->name('send-email');
Route::post('subscribe', [\App\Http\Controllers\HomeController::class,'subscription'])->name('subscribe');
