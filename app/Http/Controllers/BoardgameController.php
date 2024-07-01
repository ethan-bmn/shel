<?php

namespace App\Http\Controllers;

use App\Models\Boardgame;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BoardgameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jeux = Boardgame::all();

        return Inertia::render('ListGames', [
            'jeux' => $jeux,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $boardgame)
    {
        $jeu = Boardgame::find($boardgame);
        return Inertia::render('Games', [
            'jeu' => $jeu,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Boardgame $boardgame)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Boardgame $boardgame)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Boardgame $boardgame)
    {
        //
    }

    public function getRandomGames(): JsonResponse
    {
        // Sélectionner 3 articles aléatoires
        $randomJeux = Boardgame::inRandomOrder()->take(3)->get();

        // Retourner les articles en réponse JSON
        return response()->json($randomJeux);

    }
}
