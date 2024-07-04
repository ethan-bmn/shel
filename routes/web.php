<?php

use App\Http\Controllers\ProfileController;
use App\Models\Boardgame;
use App\Models\User;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\BoardgameController;

Route::group(['middleware' => ['web']], function () {
    Route::get('generate-pdf/{order}', [App\Http\Controllers\PDFController::class, 'generatePDF']);
    Route::get('/', function () {
        return Inertia::render('Dashboard', [
            'jeuRandom'=> Boardgame::inRandomOrder()->take(1)->get()[0]
        ]);
    })->name('dashboard');
    Route::get('/favorites', function () {
        return Inertia::render('Favoris');
    })->name('favorites');

    Route::get('/cart', [App\Http\Controllers\ShoppingCartController::class, 'show'])
        ->name('cart');

    Route::get('/administration',function (){
        return Inertia::render('Administration');
    })->name('administration');

    Route::get('/roles', [\App\Http\Controllers\UserController::class, 'roles'])
        ->middleware(\App\Http\Middleware\UserIsAdmin::class)
        ->name('roles');

    Route::get('/locations',function(){
        return Inertia::render('RentalHistory');
    })->name('locations');

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

});

