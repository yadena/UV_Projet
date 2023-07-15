<?php

namespace App\Http\Controllers;

use App\Models\Election;
use App\Models\Electeur;
use App\Models\Candidat;

use Illuminate\Http\Request;

class ElectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $elections = Election::all();
        
        return view('layouts.election.index', compact('elections'));
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
    public function show(string $id)
    {
        //

        $candidat =Candidat::where($id ,$candidat->election_id);
        return view('layouts.election.index',compact('candidat'));
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

    public function Elec_c(){
        $elections =Election::where('1',$election->statut);
        
       
        return view('layouts.election.index',compact('elections'));
        
    }

    public function Elec_av(){
        $elections =Election::where('0',$election->statut);
        
       
        return view('layouts.election.index',compact('elections'));
        
    }
    public function Elec_p(){
        $elections =Election::where('1',$election->time);
        
       
        return view('layouts.election.index',compact('elections'));
        
    }
}
