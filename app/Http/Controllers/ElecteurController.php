<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElecteurController extends Controller
{


  
        /**
         * Affiche une liste des électeurs.
         *
         * 
         */
        public function index()
        {
            $electeurs = Electeur::all();
            return view('layouts.electeur.index', compact('electeurs'));
        }
    
        /**
         * Affiche le formulaire de création d'un nouvel électeur.
         *
         * 
         */
        public function create()
        {
            return view('layouts.electeur.create');
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
    
            return redirect()->route('layouts.electeur.index')
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
            return view('layouts.electeur.show', compact('electeur'));
        }
    
        /**
         * Affiche le formulaire d'édition d'un électeur spécifique.
         *
         * 
         */
        public function edit($id)
        {
            $electeur = Electeur::find($id);
            return view('layouts.electeur.edit', compact('electeur'));
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
    
            return redirect()->route('layouts.electeur.index')
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
        
            return redirect()->route('layouts.electeur.index')
            ->with('success', 'Électeur supprimé avec succès.');

        }

        


  public function vote($electeurId, $candidatId,$electionId)
    {
        // Vérifier si l'électeur est éligible
        $electeur = Electeur::find($electeurId);
        $election =Election::find($electionId);
        
        if (Str::contains($electeur->matricule, $election->faculté) ){
            if ($electeur) {
                
                if ($electeur->niveau == $electeur->election->niveau){
                    if(!$electeur->voted){
                        // Vérifier si le candidat existe
                        $candidat = Candidat::find($candidatId);
                        if ($candidat) {

                            // Incrémenter le nombre de votes du candidat
                            $candidat->vote++;
                            //modifier l'attribut voted pour dire que l'electeur a dejà voté
                            $electeur->voted = false;

                            // Sauvegarder les modifications
                            $candidat->save();
                              
                        }
                    }
                }
            }

        }else{
            return response()->json(['message' => 'Électeur non éligible'], 403);
        }
        
        return response()->json(['message' => 'Vote enregistré avec succès']);
          
    }
}
    

