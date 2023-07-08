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

        return view('election.ajouter');
    }
    public function liste()
    {
        $election = Election::all();

        return view('election.liste', compact('election'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $election = new Election();
        $election->faculte =$request->faculte;
        $election->filiere =$request->filiere;
        $election->niveau =$request->niveau;
        $election->datedebut =$request->datedebut;
        $election->datefin =$request->datefin;
        $election->statuts =$request->statuts;

        $election->save();

        return redirect()->back()->with('success','Election enregistrée avec succes.');

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
        $election = Election::find($id);
        return view('election.editer', compact('election'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $election = Election::find($id);

        $election->faculte =$request->faculte;
        $election->filiere =$request->filiere;
        $election->niveau =$request->niveau;
        $election->datedebut =$request->datedebut;
        $election->datefin =$request->datefin;
        $election->statuts =$request->statuts;

        $election->update();
        return redirect()->route('index.election')->with('success',"Election modifier avec succès");
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $election = Election::find($id);
        $election->delete();
        return back();
    }

   /* public function Choice_Elec(){
        $elections =Election::all();
        $el;
        for( $elections as e ){
            if($e->niveau)
        }
    }*/
}
