<?php
use Illuminate\Support\Facades\Route;
Route::get('/jeux-random', [\App\Http\Controllers\BoardgameController::class, 'getRandomBoardgames']);
