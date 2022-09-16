@extends('layouts.app')
@section('index')
@if (count($album)>0)
@foreach ($album as $photos)

<div class="card floating-card" style="width: 17rem;">
    <a href="/albums/{{$photos->id}}">
    <img src="/storage/album_covers/{{$photos->cover_image}}" class="card-img-top" alt="No Image"></a>
    <div class="card-body">
      <h5 class="card-title">{{$photos->name}}</h5>
      <p class="card-text">{{$photos->description}}</p>
    </div>
  </div>



@endforeach
@else
  <p>No Albums To Display</p>
@endif



@endsection
