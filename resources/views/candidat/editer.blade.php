@extends('Layouts.app')

@section('body')

<div class="container">
    @if(session('success'))
    <div class ='alert alert-success mt-3'>
        {{session('success')}}
    </div>
    @endif
    <div class="container-fluid py-10">
        <div class="row">
            <div class="col-md-15">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Editer candidat</p>

                        </div>

                    </div>
                    <div class="card-body">
                        <form action="{{Route('update.candidat',$candidat->id)}}" method="post">
                            @csrf
                            <div class="row">

                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="">Nom:</label>
                                        <input type="text" name="nom" id="" class="form-control"value = "{{$candidat->nom}}">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Prénom(s):</label>
                                        <input type="text" name="prenom" id="" class="form-control"value = "{{$candidat->prenom}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Date de naissance:</label>
                                        <input type="date" name="DateNaissance" id="" class="form-control"value = "{{$candidat->DateNaissance}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Matricule:</label>
                                        <input type="text" name="matricule" id=""class="form-control"value = "{{$candidat->matricule}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Faculté:</label>
                                        <input type="text" name="faculte" id=""class="form-control"value = "{{$candidat->faculte}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Filière:</label>
                                        <input type="text" name="filiere" id=""class="form-control"value = "{{$candidat->filiere}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Niveau:</label>
                                        <input type="integer" name="niveau" id=""class="form-control"value = "{{$candidat->niveau}}">
                                    </div>
                                </div>
                                <div class="col-md-10>
                                    <div class="form-group">
                                        <label for=" " >Motivation:</label>
                                        <input type="text" name="motivation" id=""class="form-control" value = "{{$candidat->motivation}}">
                                    </div>
                                </div>
                                <div class="col-md-10>
                                    <div class="form-group">
                                        <label for=" " >Voie:</label>
                                        <input type="integer" name="voie" id=""class="form-control"value = "{{$candidat->voie}}">
                                    </div>
                                </div>
                            </div>

                            <hr class="horizontal dark">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group text-center">
                                        <button class='btn btn-success '>Modifier</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



        </div>

    </div>
@endsection
