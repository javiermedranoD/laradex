@extends('layouts.app')

@section('title', 'Trainer Edit')

@section('content')
<form class="form-group" method="POST" action="/trainers/{{$trainer->slug}}" enctype="multipart/form-data">
  @method('PUT')
  @csrf
    <div class="form-group">
        <label for="">Nombre</label>
        <input type="text" name="name" value="{{$trainer->name}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="avatar">Avatar</label><br>
      <img style="height:100px; width: 100px; background-color: #EFEFEF; margin:10px;" class="card-img-top rounded-circle mx-auto d-block border border-info" src="/images/{{ $trainer->avatar }}" alt="Card image cap">
      <input type="file" name="avatar" >
    </div>
    <div class="form-group">
      <label for="description">Descripción</label>
      <input type="text" name="description" value="{{$trainer->description}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Slug</label>
      <input type="text" name="slug" value="{{$trainer->slug}}" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Actualizar
    </button>
</form>


@endsection


