@extends('layouts.app')

@section('body')
    <form class="row g-3 align-center">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Matricule</label>
            <input type="text" class="form-control" id="matriculeControle" placeholder="20sci.......">
        </div>

        
        <div class="col-auto">
            <a href="/vote/confirm" class="btn btn-primary">Confirmer</a>
        </div>
    </form>
@endsection