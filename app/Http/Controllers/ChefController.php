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
        $chefs = Chef::paginate(2);
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

        request()->validate([
        'name' => 'required|string|max:255',
        'email'=> 'required',
         'experience' => 'required|integer|between:2,10'
        ]);
        Chef::create([
            'name' => $request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'experience'=>$request->experience,

        ]);

        flash()->success('Chef created successfully!');
        return redirect()->route('cheflist');
    }

    /**
     * Display the specific nd resource.
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
        return view('editchef', compact('chef'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function updatechef(Request $request, Chef $chef)
    {

        request()->validate([
            'name' => 'required|string|max:255',
            'email'=> 'required',
            'experience' => 'required|integer|between:2,10'
        ]);
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
            flash()->success('Chef deleted successfully!');
            return redirect()->route('cheflist');



    }
}
