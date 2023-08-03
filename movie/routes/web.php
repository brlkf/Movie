<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Redirect;


// Redirect the root URL to /movies
Route::redirect('/', '/movies');

// Define the movies route
Route::get('/movies', [MovieController::class, 'getMovies'])->name('movies.index');

Route::post('/movies/{movieId}', [MovieController::class, 'favorite'])->name('movies.favorite');
Route::get('/favorites', [MovieController::class, 'showFavorites'])->name('movies.showFavorites');