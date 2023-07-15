@extends('layouts.app')

@section('body')



    @foreach ($candidats as $candidat )
        
        <div class="container text-center text-white">
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="#"  class="rounded-pill shadow-md p-2" alt="{{$candidat->nom}}photo">
                        <div class="card-body">
                            <h5 class="card-title"> candidat:{{$candidat->nom}} {{$candidat->prenom}}</h5>
                        
                            <p class="card-text">matricule:{{$candidat->matricule}}</p>
                            <p class="card-text">Niveau:{{$candidat->niveau}}</p>
                            
                            <a href="/vote" class="btn btn-primary">Voter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


@endsection