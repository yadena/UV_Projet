@extends('layouts.app')

@section('body')

<div class="table-responsive p-0">
    <table class="table align-items-center mb-0">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Faculté</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Filière</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Niveau</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Matricule</th>

          <th class="text-secondary opacity-7"></th>
        </tr>
      </thead>
      @foreach ($electeur as $electeur)
           <tr>

              <td>{{ $election->id }}</td>
              <td>{{ $election->faculte }}</td>
              <td>{{ $election->filiere }}</td>
              <td>{{ $election->niveau }}</td>
              <td>{{ $election->Matricule }}</td>



           </tr>

      @endforeach
    </table>
  </div>
    </div>

@endsection
