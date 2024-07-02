<?php

use App\Http\Controllers\BoardgameController;
use Illuminate\Support\Facades\Route;
Route::get('/jeux-random', [BoardgameController::class, 'getRandomBoardgames']);
Route::get('/jeux-populaires', [BoardgameController::class, 'getPopularBoardgames']);
