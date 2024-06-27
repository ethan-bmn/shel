<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\BoardgameController;

Route::get('/', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
Route::get('/favorites', function () {
    return Inertia::render('Favoris');
})->name('favorites');

Route::get('/games', function () {
    return Inertia::render('Games');
})->name('games');

Route::get('/cart', function () {
    return Inertia::render('Panier');
})->name('cart');
Route::get('/list',function (){
    return Inertia::render('ListGames');
})->name('list');
Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'show'])
        ->name('profile.show');
});

