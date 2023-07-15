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
                        <form action="{{Route('update.election',$election->id)}}" method="post">
                            @csrf
                            <div class="row">

                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label for="">Faculté:</label>
                                        <input type="text" name="faculte" id="" class="form-control"value = "{{$election->faculte}}">

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Filière:</label>
                                        <input type="text" name="filiere" id="" class="form-control"value = "{{$election->filiere}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Niveau:</label>
                                        <input type="string" name="niveau" id="" class="form-control"value = "{{$election->niveau}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Date Debut:</label>
                                        <input type="text" name="datedebut" id=""class="form-control"value = "{{$election->datedebut}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Date Fin:</label>
                                        <input type="text" name="faculte" id=""class="form-control"value = "{{$election->datefin}}">
                                    </div>
                                </div>

                            </div>

                            <div class="row">


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

