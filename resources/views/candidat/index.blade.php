@extends('layouts.app')

@section('body')
    <div class="row inline">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </button>
          </div>


        <body>


            <div class="container-fluid py-5">
                <div class="row">
                  <div class="col-12">
                    <div class="card mb-4">
                      <div class="card-header pb-1">
                        <h6>Liste des candidats</h6>

                        <a class="nav-link " href="/add/candidat">
                            <button class="btn btn-primary btn-sm ms-10">Nouveau candidat</button>
                        </a>
                      </div>

                      <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                          <table class="table align-items-center mb-0">
                            <thead>
                              <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Photo</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nom</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Prénom</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Matricule</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Faculté</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Filière</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Niveau</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                                <th class="text-secondary opacity-7"></th>
                              </tr>
                            </thead>
                            @foreach ($candidat as $candidat)
                                 <tr>

                                    <td>{{ $candidat->id }}</td>
                                    <td>
                                        <img src = "candidat/{{ $candidat->photo }}" class="rounded-circle" whidth="50" height = "50"/>
                                    </td>
                                    <td>{{ $candidat->nom }}</td>
                                    <td>{{ $candidat->prenom }}</td>
                                    <td>{{ $candidat->matricule }}</td>
                                    <td>{{ $candidat->faculte }}</td>
                                    <td>{{ $candidat->filiere }}</td>
                                    <td>{{ $candidat->niveau }}</td>
                                    <td>
                                        <a href="{{route('editer.candidat',$candidat->id)}}" class="btn btn-warning">Editer</a>
                                        <a onclick="return confirm ('Voulez-vous supprimer cette candidature?');" href="{{Route('delete.candidat',$candidat->id)}}" class="btn btn-danger">Supprimer</a>
                                        <a class="btn btn-success"  href='/index/vote/{$candidat->matricule}/{$candidat->election_id}/{$electeur->matricule}'>voter</button>
                                       

                                    </td>
                                 </tr>
                                 


                                 </div>

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
