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



  public function vote($candidatId, Request $request,$electionId)
    {   $request->validate([
        "election_id"=>"required|exists:elections,id",
        "candidat_id"=>"required|exists:candidats,id",
        "electeur_id"=>"required|exists:electeurs,id",
    ]);
    $electeurId=$request->input('matriculeControle');


        // Vérifier si l'électeur est éligible
        $electeur = Electeur::find($electeurId);
        $election =Election::find($electionId);

        if (Str::contains($electeur->matricule, $election->faculté) ){
            if ($electeur) {

                if ($electeur->niveau == $election->niveau){
                    if(!$electeur->voted){
                        // Vérifier si le candidat existe
                        $candidat = Candidat::find($candidatId);
                        if ($candidat) {

                            // Incrémenter le nombre de votes du candidat
                            $candidat->voix +=1;
                            //modifier l'attribut voted pour dire que l'electeur a dejà voté
                            $electeur->voted = false;

                            // Sauvegarder les modifications
                            $candidat->save();
                            $electeur->save();

                        }
                    }
                }
            }

        }else{
           // return response()->json(['message' => 'Électeur non éligible'], 403);
            return redirect('layouts.candidat.index')
                        ->with('failed', 'Électeur non éligible');

        }

        return response()->json(['message' => 'Vote enregistré avec succès']);


       // return response()->json(['message' => 'Vote enregistré avec succès']);
       return redirect('layouts.candidat.index')
        ->with('success', 'vote enregistré avec succès');

    }

}


