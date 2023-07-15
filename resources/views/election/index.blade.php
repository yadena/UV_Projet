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
            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
              Filières
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Mathemqtique</a>
              <a class="dropdown-item" href="#">Informatique</a>
              <a class="dropdown-item" href="#">Chimie </a>
            </div>
          </div>
    </div>

    <body>
        <div class="container-fluid py-7">
            <div class="row">
              <div class="col-12">
                <div class="card mb-4">
                  <div class="card-header pb-1">
                    <h6>Liste des elections</h6>

                    <a class="nav-link " href="/ajouter/election">
                        <button class="btn btn-primary btn-sm ms-10">Nouvelle élection</button>
                    </a>
                  </div>


                    <div class="table-responsive p-0">
                      <table class="table align-items-center mb-0">
                        <thead>
                          <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Faculté</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Filière</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Niveau</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date Debut</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date Fin</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Statuts</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                            <th class="text-secondary opacity-7"></th>
                          </tr>
                        </thead>
                        @foreach ($elections as $election)
                             <tr>

                                <td>{{ $election->id }}</td>
                                <td>{{ $election->faculte }}</td>
                                <td>{{ $election->filiere }}</td>
                                <td>{{ $election->niveau }}</td>
                                <td>{{ $election->datedebut }}</td>
                                <td>{{ $election->datefin }}</td>
                                <td>{{ $election->status }}</td>
                                <td>{{ $election->action }}</td>
                                <td>
                                    <a href="{{route('editer.election',$election->id)}}" class="btn btn-warning">Editer</a>
                                    <a onclick="return confirm ('Voulez-vous supprimer cette candidature?');" href="{{Route('delete.election',$election->id)}}" class="btn btn-danger">Supprimer</a>
                                </td>



                             </tr>

                        @endforeach
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

    </body>
@endsection
