<?php

use App\Http\Controllers\BoardgameController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoanController;
use Illuminate\Support\Facades\Route;


/**
 * Route BoardGame
 */
Route::get('/jeux-random', [BoardgameController::class, 'getRandomBoardgames']);
Route::get('/jeux-populaires', [BoardgameController::class, 'getPopularBoardgames']);
Route::post('/boardgames/{id}/recommandations', [BoardgameController::class, 'storeRecommandation']);
Route::post('/boardgames', [BoardgameController::class, 'store'])->name('boardgames.store');
Route::patch('/games/{id}/like', [BoardgameController::class, 'likeGame']);

/**
 * Route category
 */
Route::get('/category-choice', [CategoryController::class,'getCategories']);

/**
 * Route location
 */
Route::get('location-list',[LoanController::class,'getLocation']);
