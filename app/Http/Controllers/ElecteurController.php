<?php

namespace App\Http\Controllers;
use App\Models\Electeur;
use App\Models\Candidat;
use App\Models\Election;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ElecteurController extends Controller
{



        /**
         * Affiche une liste des électeurs.
         *
         *
         */
        public function index()
        {
            $candidats = Candidat::paginate(10);
            return view('electeur.accueil', compact('candidats'));
        }

        /**
         * Affiche le formulaire de création d'un nouvel électeur.
         *
         *
         */
        public function create()
        {
            return view('electeur.create');
        }

        /**
         * Enregistre un nouvel électeur dans la base de données.
         *
         *
         */
        public function store(Request $request)
        {
            $request->validate([
                'nom' => 'required',
                'prenom' => 'required',
                // Ajoutez ici les autres règles de validation des champs
            ]);

            Electeur::create($request->all());

            return redirect()->route('electeur.index')
                ->with('success', 'Électeur créé avec succès.');
        }

        /**
         * Affiche les détails d'un électeur spécifique.
         *
         *
         */
        public function show($id)
        {
            $electeur = Electeur::find($id);
            return view('electeur.show', compact('electeur'));
        }

        /**
         * Affiche le formulaire d'édition d'un électeur spécifique.
         *
         *
         */
        public function edit($id)
        {
            $electeur = Electeur::find($id);
            return view('electeur.edit', compact('electeur'));
        }

        /**
         * Met à jour les informations d'un électeur spécifique dans la base de données.
         *
         *
         */
        public function update(Request $request, $id)
        {
            $request->validate([
                'nom' => 'required',
                'prenom' => 'required',
                'matricule'=>'required',
                'niveau'=>'required',
                // Ajoutez ici les autres règles de validation des champs
            ]);

            $electeur = Electeur::find($id);
            $electeur->update($request->all());

            return redirect()->route('electeur.index')
                ->with('success', 'Électeur mis à jour avec succès.');
        }

        /**
         * Supprime un électeur spécifique de la base de données.
         *
         *
         */
        public function destroy($id){
            $electeur = Electeur::findOrFail($id);
            $electeur->delete();

            return redirect()->route('electeur.index')
            ->with('success', 'Électeur supprimé avec succès.');

        }



  public function vote(Request $request, Election $election)
    {
        $request->validate([
            "matriculeVote"=>"required|exists:electeurs,matricule",
            "candidat_id"=>"required|exists:candidats,id"
        ]);

        $candidat = Candidat::find($request->candidat_id);
        $electeur = Electeur::where('matricule', $request->matriculeVote)->first();


        if($candidat->election_id != $election->id){
            return back();
        }
        $electeur->voted = true;
        $electeur->save();

        $candidat->voix++;
        $candidat->save();
        return to_route('index.candidat');
    }

}


