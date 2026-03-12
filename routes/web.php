<?php

use App\Http\Controllers\AnimalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/animal/creer', [AnimalController::class, 'create'])->name('animals.create');

Route::fallback(function () {
    return view('errors.not-found');
});