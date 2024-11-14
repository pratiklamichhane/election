<?php

namespace App\Http\Controllers;

use App\Models\Election_Parties;
use Illuminate\Http\Request;
use App\Models\Election;
use App\Models\Party;


class ElectionPartiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('election_parties.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $partys=Party::all();
        $elections=Election::all();
        return view('election_parties.form' , compact('partys','elections'));
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
    public function show(Election_Parties $election_Parties)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Election_Parties $election_Parties)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Election_Parties $election_Parties)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Election_Parties $election_Parties)
    {
        //
    }
}
