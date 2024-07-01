<?php
use Illuminate\Support\Facades\Route;


Route::get('jeux-aleatoires', [\App\Http\Controllers\BoardgameController::class, 'getRandomGames'])->name('randomGames');


