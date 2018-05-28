@extends('layouts.app')

@section('title', 'Trainer')

@section('content')
<img style="height:100px; width: 100px; background-color: #EFEFEF; margin:10px;" class="card-img-top rounded-circle mx-auto d-block border border-info" src="/images/{{ $trainer->avatar }}" alt="Card image cap">
<div class="text-center">
  <h4 class="card-title">{{ $trainer->name }}</h4>
  <p>{{ $trainer->description }}</p>
</div>


@endsection