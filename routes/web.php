<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/visitors', [App\Http\Controllers\VisitorController::class, 'index'])->name('visitors.index');
//nak create form pendaftaran
Route::get('/visitors/create', [App\Http\Controllers\VisitorController::class, 'create'])->name('visitors.create');
//nak hantar data baru ke database dan papar semula ke list
Route::post('/visitors/create', [App\Http\Controllers\VisitorController::class, 'store'])->name('visitors.store');

Route::get('/visitors/{visitor}', [App\Http\Controllers\VisitorController::class, 'show'])->name('visitors.show');

Route::get('/visitors/{visitor}/edit', [App\Http\Controllers\VisitorController::class, 'edit'])->name('visitors.edit');

Route::get('/visitors/{visitor}/delete', [App\Http\Controllers\VisitorController::class, 'delete'])->name('visitors.delete');

