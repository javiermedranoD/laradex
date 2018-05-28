@extends('layouts.app')

@section('title', 'Trainers Create')

@section('content')
<h2>Listado de trainers</h2><hr>

{{-- <div class="row"> --}}
  <div class="card-columns">
    @foreach ($trainers as $trainer)
        {{-- <div class="col-sm"> --}}
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/{{ $trainer->avatar }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{ $trainer->name }}</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        {{-- </div> --}}
    @endforeach
  </div>
{{-- </div> --}}
@endsection