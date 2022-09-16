@extends('layouts.app')

@section('content')
   <h3>Upload Photo</h3>
   <form action="/photos/store" method="POST" enctype="multipart/form-data">
   @csrf
   {{method_field('POST')}}
   <input type="text" name="name" placeholder="Photo Name" class="form-control mb-3">
   <textarea name="description"  placeholder="Photo Description"  class="form-control mb-3" cols="30" rows="10"></textarea>
   <div class="form-group">
    <input type="file" name="photo" class="form-control-file mb-3">
    <input type="hidden" value="{{$album_id}}" name="album_id">
   </div>

    <button type="submit" class="btn btn-primary">Submit</button>


</form>
@endsection
