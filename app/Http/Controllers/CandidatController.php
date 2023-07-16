<?php

namespace App\Http\Controllers;
use App\Models\Candidat;
use App\Models\Election;
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
        $elections = Election::where('datefin', '>=', now())->get();
       return view('candidat.add', compact('elections'));
    }

    /*public function search(){

        if (isset($_GET['query'])) {
            $search_text = $_GET['query'];
            $candidats = candidat::where("nom", "LIKE", "%" .$search_text. "%" )->with('matricule')->get();
            return view ("candidat.search",compact("candidats"));
        } else {
            // Handle the case where $_GET['query'] is not set
        }

        $candidats = candidat::where("nom", "LIKE", "%" .$search_text. "%" )->with('matricule')->get();

        return view ("candidat.search",compact("candidats"));

    }
    */
    public function search() {
        $search_text = $_GET['query'] ?? null;
        if ($search_text) {
            $candidats = candidat::where("nom", "LIKE", "%" .$search_text. "%" )->get();
            return view ("candidat.search",compact("candidats"));
        } else {
            $candidats = candidat::all();
            return view ("candidat.search",compact("candidats"));
        }
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function liste()

    {
        $candidat = Candidat::paginate(10);

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
        $request->validate([
            'nom'=> 'required',
            'prenom'=> 'required',
            'DateNaissance'=> 'required',
            'election_id' => 'required',
            'matricule'=> 'required',
            'faculte'=> 'required',
            'filiere'=> 'required',
            'niveau'=> 'required',
            'motivation'=> 'required',
        ]);

        //upload image
        if ($request->hasFile('photo')) {
            $imageName = time(). '.' .$request->photo->getClientOriginalExtension();
        } else {
            // handle the error here
        }

        if ($request->hasFile('photo')) {
            $request->photo->move(public_path('candidats'), $imageName);
        } else {
            // handle the error here
        }


        $candidat = new Candidat();
        $candidat->nom =$request->nom;
        $candidat->prenom =$request->prenom;
        $candidat->DateNaissance =$request->DateNaissance;
        $candidat->photo=$request->photo;
        $candidat->matricule =$request->matricule;
        $candidat->faculte =$request->faculte;
        $candidat->filiere =$request->filiere;
        $candidat->election_id =$request->election_id;
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
        $candidat->photo=$request->photo;
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

    public function resultat($id){
        $candidats=Candidat::all();
        $candidat=Candidat::find($id);
        $voice_T=0;
        foreach($candidats as $cand){
            $voice_T=$voice_T+$cand->voix;

        }
        return (($candidat->voix)/$voice_T)*100 ;

    }
}
