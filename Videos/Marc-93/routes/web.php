<?php

use App\Http\Controllers\CastController;

Route::resource('cast', CastController::class);

use App\Http\Controllers\FilmController;

Route::resource('films', FilmController::class);
Route::get('/film/ringkasan', [FilmController::class, 'ringkasan'])->name('film.ringkasan');


use App\Http\Controllers\GenreController;

Route::resource('genres', GenreController::class);



