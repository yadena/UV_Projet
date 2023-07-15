@extends('layouts.app')

@section('body')
    <div class="container">
        @if (session('success'))
            <div class='alert alert-success mt-3'>
                {{ session('success') }}
            </div>
        @endif
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-md-15">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Ajout d'une candidature</p>
                                <form action="{{Route('index.candidat')}}" method="get">
                                    <button class="btn btn-primary btn-sm ms-text-left">Liste des candidates</button>
                                </form>
                            </div>

                        </div>
                        <div class="card-body">
                            <form action="{{Route('store.candidat')}}" method="post">
                                @csrf
                                <p class="text-uppercase text-sm">Information personnelle</p>
                                <div class="row">

                                    <div class="col-md-5">

                                        <div class="form-group">
                                            <label for="">Nom:</label>
                                            <input type="text" name="nom" id=""class="form-control">
                                            @if($errors->has("nom"))
                                                <span class = "text-danger">{{ $errors->first("nom")}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Prénom(s):</label>
                                            <input type="text" name="prenom" id=""class="form-control">
                                            @if($errors->has("prenom"))
                                                <span class = "text-danger">{{ $errors->first("prenom")}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Date de naissance:</label>
                                            <input type="date" name="DateNaissance" id=""class="form-control">
                                            @if($errors->has("DateNaissance"))
                                                <span class = "text-danger">{{ $errors->first("DateNaissance")}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Matricule:</label>
                                            <input type="text" name="matricule" id=""class="form-control">
                                            @if($errors->has("matricule"))
                                                <span class = "text-danger">{{ $errors->first("matricule")}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Faculté:</label>
                                            <input type="text" name="faculte" id=""class="form-control">
                                            @if($errors->has("faculte"))
                                                <span class = "text-danger">{{ $errors->first("faculte")}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Filière:</label>
                                            <input type="text" name="filiere" id=""class="form-control">
                                            @if($errors->has("filiere"))
                                                <span class = "text-danger">{{ $errors->first("filiere")}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Niveau:</label>
                                            <input type="integer" name="niveau" id=""class="form-control">
                                            @if($errors->has("niveau"))
                                                <span class = "text-danger">{{ $errors->first("niveau")}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-10>
                                        <div class="form-group">
                                            <label for=" " >Motivation:</label>
                                            <textarea class='form-control' rows = '4' name="motivation"></textarea>
                                            @if($errors->has("motivation"))
                                                <span class = "text-danger">{{ $errors->first("motivation")}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-10>
                                        <div class="form-group">
                                            <label for=" " >Photo:</label>
                                            <input type="file" name="photo" id=""class="form-control">
                                            @if($errors->has("photo"))
                                                <span class = "text-danger">{{ $errors->first("photo")}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <hr class="horizontal dark">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group text-center">
                                            <button class='btn btn-success '>Postuler</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                </div>
            </div>

        </div>
    @endsection
