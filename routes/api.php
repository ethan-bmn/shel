<?php

use App\Http\Controllers\BoardgameController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\UserIsAdmin;
use Illuminate\Support\Facades\Route;


/**
 * Route BoardGame
 */
Route::get('games',[BoardgameController::class,'getAllGames']);
Route::get('/jeux-random', [BoardgameController::class, 'getRandomBoardgames']);
Route::get('/jeux-populaires', [BoardgameController::class, 'getPopularBoardgames']);
Route::post('/boardgames/{id}/recommandations', [BoardgameController::class, 'storeRecommandation']);
Route::post('/boardgames', [BoardgameController::class, 'store'])->name('boardgames.store');
Route::patch('/games/{id}/like', [BoardgameController::class, 'likeGame']);
Route::get('/game/{id}',[BoardgameController::class,'getgame'])->name('getGameById');
/**
 * Route category
 */
Route::get('/category-choice', [CategoryController::class,'getCategories']);

/**
 * Route location
 */
Route::get('/locations/{id}', [LoanController::class, 'getLocationByUSer'])->name('getLocationGames');

/**
 * Route Commentaire
 */
Route::post('/recommendation', [RecommendationController::class,'store'])->name('comment.store');
Route::get('read-recommendation', [RecommendationController::class,'getRecommendation']);

Route::patch('/add-to-cart/{id}', [ShoppingCartController::class, 'addToCart'])
    ->middleware('web')
    ->name('addToCart');

Route::patch('/user/{user_id}/role/{role_id}', [UserController::class, 'updateRole'])
    ->middleware(['web', UserIsAdmin::class])
    ->name('updateRole');
