<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recipes= Recipe::get();
        return view('index', [
            'recipes'=> $recipes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Recipe::create([
            'recipename' => $request->recipename,
            'ingredient_name'=>$request->ingredient_name,
            'quantity'=>$request->quantity,
            'instructions'=>$request->instructions,
    
        ]);
        return redirect()->route('recipelist');
           
    }

    /**
     * Display the specified resource.
     */
    public function show(Recipe $recipe)
    {
        return view('show', ['recipe'=>$recipe]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe)
    {
        return view('edit', ['recipe'=>$recipe]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recipe $recipe)
    {
        $recipe->update([
            'recipename' => $request->recipename,
            'ingredient_name'=>$request->ingredient_name,
            'quantity'=>$request->quantity,
            'instructions'=>$request->instructions,
    
        ]);
        return redirect()->route('recipelist'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe)
    {
        //
    }
}
