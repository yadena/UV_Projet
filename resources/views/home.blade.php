@extends('layouts.app')

@section('body')
    <div class="row d-flex justify-content-start my-2">
        <div class="dropdown row d-flex justify-content-start my-2">
            <div class="dropdown" style="width: fit-content;">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Facultés
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Faculté des sciences</a></li>
                    <li><a class="dropdown-item" href="#">Faculté de lettres</a></li>
                    <li><a class="dropdown-item" href="#">Faculté des sciences juridiques et politiques</a></li>
                    <li><a class="dropdown-item" href="#">Faculté de Medecine</a></li>
                </ul>
            </div>
            <div class="dropdown" style="width: fit-content;">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Filière
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Mathématique</a></li>
                    <li><a class="dropdown-item" href="#">Informatique</a></li>
                    <li><a class="dropdown-item" href="#">Droit</a></li>
                    <li><a class="dropdown-item" href="#">Tromathologie</a></li>
                </ul>
            </div>
            <div class="dropdown" style="width: fit-content;">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Niveau
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">1</a></li>
                    <li><a class="dropdown-item" href="#">2</a></li>
                    <li><a class="dropdown-item" href="#">3</a></li>
                    <li><a class="dropdown-item" href="#">4</a></li>
                    <li><a class="dropdown-item" href="#">5</a></li>
                    <li><a class="dropdown-item" href="#">6</a></li>
                    <li><a class="dropdown-item" href="#">7</a></li>
                </ul>
            </div>


        </div>
    </div>
    <div class="row d-flex align-items-stretch">

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 cursor-pointer">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="d-flex justify-content-start">
                            <img src="/assets/img/democracy.png" class="rounded d-block" width="100" height="100"
                                alt="voting images">
                            <div class="mx-2">
                                <span class="font-weight-bold text-sm">Election des délégués de niveau I Informatique</span>
                                <div class="d-flex justify-content-start align-items-center my-1">
                                    <div>
                                        <i class="ni ni-calendar-grid-58 text-primary text-sm opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-2 text-sm">Start date: 27-08-2023</span>
                                </div>
                                <div class="d-flex justify-content-start align-items-center my-1">
                                    <div>
                                        <i class="ni ni-book-bookmark text-primary text-sm opacity-10"></i>
                                    </div>


                                </div>
                            </div>
                        </div>


                        <a class="nav-link " href="/add/candidat">
                            <div class="d-flex justify-content-start mt-4 container-fuild">
                                <button type="button" class="btn btn-primary w-100 my-0">Postuler</button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 cursor-pointer">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="d-flex justify-content-start">
                            <img src="/assets/img/democracy.png" class="rounded d-block" width="100" height="100"
                                alt="voting images">
                            <div class="mx-2">
                                <span class="font-weight-bold text-sm">Election des délégués de niveau I
                                    Informatique</span>
                                <div class="d-flex justify-content-start align-items-center my-1">
                                    <div>
                                        <i class="ni ni-calendar-grid-58 text-primary text-sm opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-2 text-sm">Start date: 27-08-2023</span>
                                </div>
                                <div class="d-flex justify-content-start align-items-center my-1">
                                    <div>
                                        <i class="ni ni-book-bookmark text-primary text-sm opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-2 text-sm">Level: I</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mt-4 container-fuild">
                            <button type="button" class="btn btn-primary w-100 my-0">Resultat des elections</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 cursor-pointer">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="d-flex justify-content-start">
                            <img src="/assets/img/democracy.png" class="rounded d-block" width="100" height="100"
                                alt="voting images">
                            <div class="mx-2">
                                <span class="font-weight-bold text-sm">Election des délégués de niveau I
                                    Informatique</span>
                                <div class="d-flex justify-content-start align-items-center my-1">
                                    <div>
                                        <i class="ni ni-calendar-grid-58 text-primary text-sm opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-2 text-sm">Start date: 27-08-2023</span>
                                </div>
                                <div class="d-flex justify-content-start align-items-center my-1">
                                    <div>
                                        <i class="ni ni-book-bookmark text-primary text-sm opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-2 text-sm">Level: I</span>
                                </div>
                            </div>
                        </div>
                        <a class="nav-link " href="/accueil/electeur">
                            <div class="d-flex justify-content-start mt-4 container-fuild">
                                <button type="button" class="btn btn-primary w-100 my-0">Voter</button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
