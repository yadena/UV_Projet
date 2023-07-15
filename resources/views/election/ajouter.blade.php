@extends('layouts.app')

@section('body')
    <div class="container">
        @if (session('success'))
            <div class='alert alert-success mt-3'>
                {{ session('success') }}
            </div>
        @endif
        <div class="container-fluid py-7">
            <div class="row">
                <div class="col-md-15">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Ajout d'une élection</p>

                                <a class="nav-link " href="/liste/election">
                                    <button class="btn btn-primary btn-sm ms-10">Liste des élections</button>
                                </a>
                            </div>

                        </div>
                        <div class="card-body">
                            <form action="{{Route('store.election')}}" method="post">
                                @csrf
                                <div class="row">

                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <label for="">Faculté:</label>
                                            <input type="text" name="faculte" id=""class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Filière:</label>
                                            <input type="text" name="filiere" id=""class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Niveau:</label>
                                            <input type="text" name="niveau" id=""class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Date Debut:</label>
                                            <input type="date" name="datedebut" id=""class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Date Fin:</label>
                                            <input type="date" name="datefin" id=""class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Statuts:</label>
                                            <input type="text" name="statuts" id=""class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <hr class="horizontal dark">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group text-center">
                                            <button class='btn btn-success '>Ajouter</button>
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
