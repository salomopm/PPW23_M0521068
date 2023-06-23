<?php

namespace App\Http\Controllers;

use App\Models\Fighter;
use Illuminate\Http\Request;

class FighterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtFighter = Fighter::latest()->orderBy('age','desc')->get();
        return view('fighter.table-fighter',[
            'dtFighter' => $dtFighter
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('fighter.form');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Fighter::create([
            'name' => $request->name,
            'age' => $request->age,
            'basic' => $request->basic,
            'weightClass' => $request->weightClass
        ]);

        return redirect('table-fighter');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
