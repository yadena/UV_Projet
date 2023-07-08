@extends('layouts.app')

@section('body')
    <div class="row d-flex justify-content-start my-2">
        <div class="dropdown" style="width: fit-content;">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Facuté
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>
        <div class="dropdown" style="width: fit-content;">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Filiere
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>
        <div class="dropdown" style="width: fit-content;">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                niveau
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>
    </div>
    <div class="row d-flex align-items-stretch">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 cursor-pointer">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="d-flex justify-content-start">
                          <img src="/assets/img/democracy.png" class="rounded d-block" width="100" height="100" alt="voting images">
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
                                <span class="nav-link-text ms-2 text-sm">Level: I</span>
                              </div>
                          </div>
                        </div>
                        <div class="d-flex justify-content-start mt-4 container-fuild">
                            <button type="button" class="btn btn-primary w-100 my-0">Apply now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
