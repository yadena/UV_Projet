@extends('layouts.app')

@section('body')
    <div class="row inline">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="..." class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="C:\Utilisateurs\ckoda\OneDrive\Bureau\ob_8fc85f_elections-graphic-hands.jng" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="C:\Utilisateurs\ckoda\OneDrive\Bureau\ob_8fc85f_elections-graphic-hands.jng" class="d-block w-100" alt="elections">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </button>
          </div>

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
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Filières
            </button>
            <ul class="dropdown-menu">

                <a class="dropdown-item" href="#">Mathématiques</a></li>
                <li><a class="dropdown-item" href="#">Informatique</a></li>
                <li><a class="dropdown-item" href="#">chimie</a></li>
                <li><a class="dropdown-item" href="#">Biochimie</a></li>
                <li><a class="dropdown-item" href="#">Biologie animale</a></li>
                <li><a class="dropdown-item" href="#">Biologie vegetale</a></li>
                <li><a class="dropdown-item" href="#">Science économiques</a></li>
                <li><a class="dropdown-item" href="#">Physique</a></li>
            </ul>
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

                      <div class="card-body px-0 pt-0 pb-2">
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
                                    <td>{{ $election->statuts }}</td>
                                    <td>
                                        <a href="{{route('editer.election',$election->id)}}" class="btn btn-warning">Editer</a>
                                        <a onclick="return confirm ('Voulez-vous supprimer cette élection?');" href="{{Route('delete.election',$election->id)}}" class="btn btn-danger">Supprimer</a>
                                    </td>



                                 </tr>

                            @endforeach
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


              </div>

        </body>



    @endsection
