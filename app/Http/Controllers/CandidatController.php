<?php

namespace App\Http\Controllers;
use App\Models\Candidat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('candidat.add');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function liste()

    {
        $candidat = Candidat::all();

        return view('candidat.index', compact("candidat"));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $candidat = new Candidat();
        $candidat->nom =$request->nom;
        $candidat->prenom =$request->prenom;
        $candidat->DateNaissance =$request->DateNaissance;
        $candidat->voie=$request->voie;
        $candidat->matricule =$request->matricule;
        $candidat->faculte =$request->faculte;
        $candidat->filiere =$request->filiere;
        $candidat->niveau =$request->niveau;
        $candidat->motivation =$request->motivation;

        $candidat->save();

        return redirect()->back()->with('success','Candidature soumise avec succes.');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $candidat = Candidat::find($id);
        return view('candidat.editer', compact('candidat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $candidat = Candidat::find($id);
        $candidat->nom =$request->nom;
        $candidat->prenom =$request->prenom;
        $candidat->DateNaissance=$request->DateNaissance;
        $candidat->matricule =$request->matricule;
        $candidat->faculte =$request->faculte;
        $candidat->filiere =$request->filiere;
        $candidat->niveau =$request->niveau;
        $candidat->motivation =$request->motivation;

        $candidat->update();
        return redirect()->route('index.candidat')->with('success',"Candidat modifier");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $candidat = Candidat::find($id);
        $candidat->delete();
        return back();
    }
}
