<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use Illuminate\Http\Request;

class ChefController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function cheflist()
    {
        $chefs = Chef::get();
        return view('cheflist', [
            'chefs' => $chefs
        ]);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function addchef()
    {
        return view('addchef');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Chef::create([
            'name' => $request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'experience'=>$request->experience,

        ]);
        return redirect()->route('cheflist');
    }

    /**
     * Display the specified resource.
     */
    public function show(Chef $chef)
    {
        return view('showchef', ['chef'=>$chef]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editchef(Chef $chef)
    {
        return view('editchef', ['chef'=>$chef]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function updatechef(Request $request, Chef $chef)
    {

        $chef->update([
            'name' => $request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'experience'=>$request->experience,

        ]);
        return redirect()->route('cheflist');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chef $chef)
    {

            $chef->delete();
            return redirect()->route('cheflist');

    }
}
