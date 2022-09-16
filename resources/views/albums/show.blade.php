@extends('layouts.app')
@section('content')
<div class="mt-3">

    <a href="/" class="btn btn-primary">Go Back</a>
    <a href="/photos/create/{{$album->id}}" class="btn btn-secondary mx-3">Upload Photos</a>

</div>
<hr>
@foreach ($album->Photos as $photos)

<div class="card floating-card" style="width: 17rem;">
    <a href="/photos/{{$album->id}}/{{$photos->id}}">
    <img src="/storage/photos/{{$album->id}}/{{$photos->photo}}" class="card-img-top" alt="No Image"></a>
    <div class="card-body">
      <h5 class="card-title">{{$photos->name}}</h5>
      <p class="card-text">{{$photos->description}}</p>
    </div>
  </div>



@endforeach






@endsection
