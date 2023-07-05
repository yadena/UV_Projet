@extends('layouts.app')

@section('body')
    <div class="container mt-3">
        <table class="table text-white">
            <tr>
                
                <th>Nom</th>
                <th>Prenom</th>
                <th>Voted</th>
                <th>Matricule</th>
                <th>Niveau</th>
            </tr>
            @foreach($electeurs as $electeur)
                <tr>
                    <td>{{$electeur->nom}}</td>
                    <td>{{$electeur->prenom}}</td>
                    <td>{{$electeur->voted}}</td>
                    <td>{{$electeur->matricule}}</td>
                    <td>{{$electeur->niveau}}</td>
                </tr>
            @endforeach
            
        </table>
    </div>

@endsection