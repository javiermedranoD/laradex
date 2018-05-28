@extends('layouts.app')

@section('title', 'Trainers Create')

@section('content')
<h2>Listado de trainers</h2><hr>

{{-- <div class="row"> --}}
  <div class="row">
    @foreach ($trainers as $trainer)
        <div class="col-sm">
          <div class="card text-center" style="width: 18rem; margin-top:20px;">
            <img style="height:100px; width: 100px; background-color: #EFEFEF; margin:10px;" class="card-img-top rounded-circle mx-auto d-block border border-info" src="images/{{ $trainer->avatar }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{ $trainer->name }}</h5>
              <p class="card-text">{{ $trainer->description }}</p>
              <a href="/trainers/{{$trainer->id}}" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>
    @endforeach
  </div>
{{-- </div> --}}
@endsection