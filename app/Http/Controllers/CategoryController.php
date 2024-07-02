<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();

        return Inertia::render('AddGame', [
            'categories' => $categories,
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
    public function show(CategoryController $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoryController $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CategoryController $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoryController $category)
    {
        //
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     * Récupération des catégories de jeux
     */
    public function getCategories()
    {
        $categories = Category::all();
        return response()->json($categories);
    }
}
