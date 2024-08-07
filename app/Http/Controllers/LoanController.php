<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(LoanController $loan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LoanController $loan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LoanController $loan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LoanController $loan)
    {
        //
    }
    public function getlocation()
    {
        $location = Loan::all();
        return response()->json($location);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     * Récupère les locations par ID utilisateur
     */
    public function getLocationByUSer($id)
    {
        $locations = Loan::where('user_id', $id)->get();

        return response()->json($locations);
    }
}
