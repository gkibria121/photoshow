@extends('layouts.app')
@section('content')

<h3 class="mx-2">{{$photo->title}}</h3>
<div class="container">

<img src="/storage/photos/{{$album}}/{{$photo->photo}}" alt="" class="photo">

</div>
<form action="/photos/{{$album}}/{{$photo->id}}" method="POST">
    @csrf
   {{method_field('DELETE')}}
   <a href="/albums/{{$album}}" class="btn btn-primary mt-3 mx-2">Go Back</a>
<button type="submit" class="btn btn-danger mt-3 mx-4">DELETE</button>
</form>



@endsection
