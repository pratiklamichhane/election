<?php

namespace App\Http\Controllers;

use App\Models\Election;
use Illuminate\Http\Request;

class ElectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $elections = Election::all();
        return view("elections.index", compact('elections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("elections.form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        
        $validated= $request->validate([
            'name' => 'required',
            'description' => 'required',
            'date' => 'required',
            
        ]);
        Election::create($validated);
        return redirect()->route('elections.index')->with('success', 'Election Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Election $election)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Election $election)
    {
        return view("elections.edit",compact('election'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Election $election)
    {
        $validated= $request->validate([
            'name' => 'required',
            'description' => 'required',
            'date' => 'required',
            
        ]);
        $election->update($validated);
        return redirect()->route('elections.index')->with('success', 'Election Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Election $election)
    {
        $election->delete();
        return redirect()->route('elections.index')->with('success', 'Election Deleted Successfully');
    }
}
