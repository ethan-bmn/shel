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

Route::get('/cart', function () {
    return Inertia::render('Panier');
})->name('cart');

Route::get('/administration',function (){
    return Inertia::render('Administration');
})->name('administration');


Route::get('/login', function(){
    return Inertia::render('Auth/Login');
})->name('login');

/*Verb          Path                        Action  Route Name
GET           /users                      index   users.index
GET           /users/create               create  users.create
POST          /users                      store   users.store
GET           /users/{user}               show    users.show
GET           /users/{user}/edit          edit    users.edit
PUT|PATCH     /users/{user}               update  users.update
DELETE        /users/{user}               destroy users.destroy*/
Route::resource('/games', App\Http\Controllers\BoardgameController::class);

Route::middleware('auth')->group(function () {


    Route::get('/profile', [ProfileController::class, 'show'])
        ->name('profile.show');
});

