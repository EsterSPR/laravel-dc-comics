<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController as PageController;

use App\Http\Controllers\ComicController as ComicController;




Route::resource('comics', PageController::class);

Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');
