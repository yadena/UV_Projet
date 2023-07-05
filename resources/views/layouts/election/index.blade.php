@extends('layouts.app')

@section('body')
    <div class="row inline">

        <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Facultés
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Faculté des sciences</a></li>
                    <li><a class="dropdown-item" href="#">Faculté de lettres</a></li>
                    <li><a class="dropdown-item" href="#">Faculté des sciences juridiques et politiques</a></li>
                    <li><a class="dropdown-item" href="#">Faculté de Medecine</a></li>
                </ul>
        </div>

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Filières
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Mathématiques</a></li>
                <li><a class="dropdown-item" href="#">Informatique</a></li>
                <li><a class="dropdown-item" href="#">chimie</a></li>
                <li><a class="dropdown-item" href="#">Biochimie</a></li>
                <li><a class="dropdown-item" href="#">Biologie animale</a></li>
                <li><a class="dropdown-item" href="#">Biologie vegetale</a></li>
                <li><a class="dropdown-item" href="#">Science économiques</a></li>
                <li><a class="dropdown-item" href="#">Physique</a></li>
            </ul>
        </div>
        
        
    </div>



    <div class="container mt-3">
        <table class="table text-white">
            <tr>
                
                <th>#</th>
                <th>Niveau</th>
                <th>Faculté</th>
                <th>Action</th>
                
            </tr>
            @foreach($elections as $election)
                <tr>
                    <td>{{$election->id}}</td>
                    <td>{{$election->niveau}}</td>
                    <td>{{$election->faculté}}</td>
                    <td>
                        <button class="btn btn-secondary " type="button"  aria-expanded="false" action="/liste/candidat">
                            Voir
                        </button>
                    </td>
                    
                </tr>
            @endforeach
            
        </table>
    </div>


    
@endsection