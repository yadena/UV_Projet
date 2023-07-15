<?php

namespace App\Http\Controllers;

use App\Models\Candidat;

use Illuminate\Http\Request;

class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $candidats = Candidat::all();

        return view('layouts.candidat.index2', compact('candidats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('layouts.candidat.add');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'matricule'=>'required',
            'niveau'=>'required',
            // Ajoutez ici les autres règles de validation des champs
        ]);

        Candidat::create($request->all());

        return redirect()->route('layouts.candidat.index')
            ->with('success', 'Candidat créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $candidat = Candidat::find($id);
            return view('layouts.candidat.show', compact('candidat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //

        $candidat = Candidat::find($id);
        return view('layouts.candidat.edit', compact('candidat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'matricule'=>'required',
            'niveau'=>'required',
            // Ajoutez ici les autres règles de validation des champs
        ]);

        $candidat = Candidat::find($id);
        $candidat->update($request->all());

        return redirect()->route('layouts.candidat.index')
            ->with('success', 'Candidat mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $candidat = Candidat::findOrFail($id);
            $candidat->delete();
        
            return redirect()->route('layouts.candidat.index')
            ->with('success', 'Candidat supprimé avec succès.');
    }

    public  function search(Request $request){

        $candidat = Candidat::findOrFail($id);
        if(isset($candidat))
            return $candidat;
        
            
        

    }

}
