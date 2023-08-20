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

        $validated = $request->validate([
            'name' => ['required', 'string'],
            'age' => ['required', 'int'],
            'basic' => ['required', 'string'],
            'weightClass' => ['required', 'string'],
            'fighter_photo' => ['nullable'],
        ]);

        if(!$validated){
            return redirect()->back()->with('error', 'Validation failed!');
        }

        if($request->file('fighter_photo')){
            $fileName = time().'_'.$request->file('fighter_photo')->getClientOriginalName();
            $request->file('fighter_photo')->move(public_path('fighter_photo'), $fileName);
            $filePath = 'fighter_photo/'.$fileName;

            $validated['fighter_photo'] = $filePath;
        }

        Fighter::create([
            'name' => $validated['name'],
            'age' => $validated['age'],
            'basic' => $validated['basic'],
            'weightClass' => $validated['weightClass'],
            'fighter_photo' => $validated['fighter_photo'],
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
        $peg = Fighter::findOrFail($id);
        return view('fighter.edit-form',compact('peg'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $peg = Fighter::findOrFail($id);
        $validated = $request->validate([
            'name' => ['required', 'string'],
            'age' => ['required', 'int'],
            'basic' => ['required', 'string'],
            'weightClass' => ['required', 'string'],
            'fighter_photo' => ['nullable'],
        ]);

        if(!$validated){
            return redirect()->back()->with('error', 'Validation failed!');
        }

        if($request->file('fighter_photo')){
            $fileName = time().'_'.$request->file('fighter_photo')->getClientOriginalName();
            $request->file('fighter_photo')->move(public_path('fighter_photo'), $fileName);
            $filePath = 'fighter_photo/'.$fileName;

            $validated['fighter_photo'] = $filePath;
        }
        $peg->update($validated);
        return redirect('table-fighter');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $peg = Fighter::findOrFail($id);
        $peg->delete();
        return back();
    }
}
