<?php

use App\Http\Controllers\AnimalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::prefix('animal')->group(function () {
    Route::get('/creer', [AnimalController::class, 'create'])->name('animals.create');
    Route::get('/modifier/{id}', [AnimalController::class, 'update'])->name('animals.update');
    Route::get('/supprimer/{id}', [AnimalController::class, 'delete'])->name('animals.delete');
    Route::get('/{id}', [AnimalController::class, 'show'])->name('animals.detail');
});

Route::fallback(function () {
    return view('errors.not-found');
});