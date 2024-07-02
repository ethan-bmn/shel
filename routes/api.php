<?php

use App\Http\Controllers\BoardgameController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/jeux-random', [BoardgameController::class, 'getRandomBoardgames']);
Route::get('/jeux-populaires', [BoardgameController::class, 'getPopularBoardgames']);
Route::post('/boardgames/{id}/recommandations', [BoardgameController::class, 'storeRecommandation']);
Route::post('/boardgames', [BoardgameController::class, 'store'])->name('boardgames.store');
Route::get('/category-choice', [CategoryController::class,'getCategories']);
