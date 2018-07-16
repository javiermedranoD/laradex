@extends('layouts.app')

@section('title', 'Trainers Create')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
  <h1 class="h2">Listado de trainers</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group mr-2">
      <a href="/trainers/create" class="btn btn-primary">Registrar nuevo entrenador</a>
    </div>
  </div>
</div>


{{-- <div class="row"> --}}
  <div class="row">
    @foreach ($trainers as $trainer)
        <div class="col-sm">
          <div class="card text-center" style="width: 18rem; margin-top:20px;">
            <img style="height:100px; width: 100px; background-color: #EFEFEF; margin:10px;" class="card-img-top rounded-circle mx-auto d-block border border-info" src="/images/{{ $trainer->avatar }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{ $trainer->name }}</h5>
              <p class="card-text">{{ $trainer->description }}</p>
              <a href="/trainers/{{$trainer->slug}}" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>
    @endforeach
  </div>
{{-- </div> --}}
@endsection