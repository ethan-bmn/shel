<?php

namespace App\Http\Controllers;

use App\Models\Recommendation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;

class RecommendationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getRecommendation()
    {
        $recommendation = Recommendation::all();

        return response()->json($recommendation);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Log::info('test');
        $validatedData = $request-> validate([
            'commentary'=> 'required|string|max:255',
            'user_id' => 'required|exists:users,id',
            'boardgame_id'=> 'required|exists:boardgames,id',

        ]);
        Log::info($validatedData);
        $commentary = Recommendation::create($validatedData);

        return response()->json(['message' => 'Le commentaire à été ajouté avec succès', 'boardgame' => $commentary]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Recommendation $Recommendation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recommendation $Recommendation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recommendation $Recommendation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recommendation $Recommendation)
    {
        //
    }

}
