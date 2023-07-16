@extends('layouts.app')

@section('body')
    <div class="container mt-3">
        <table class="table text-white">
            <tr>
                
                <th>Nom</th>
                <th>Prenom</th>
                <th>Voix</th>
                <th>Matricule</th>
                <th>Niveau</th>
                <th>Action</th>
            </tr>
            @foreach($candidats as $candidat)
                <tr>
                    <td>{{$candidat->nom}}</td>
                    <td>{{$candidat->prenom}}</td>
                    <td>{{$candidat->voix}}</td>
                    <td>{{$candidat->matricule}}</td>
                    <td>{{$candidat->niveau}}</td>
                    <td>
                        <button class="btn btn-success " type="button"  aria-expanded="false" wire:click='vote({{$candidat->id}})' action="/vote">
                            Voter
                        </button>
                    </td>
                </tr>
            @endforeach
            
        </table>
    </div>

@endsection