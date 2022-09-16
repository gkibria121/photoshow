@extends('layouts.app')

@section('content')
   <h3>Create Album</h3>
   <form action="/albums/store" method="POST" enctype="multipart/form-data">
   @csrf
   {{method_field('POST')}}
   <input type="text" name="name" placeholder="Albums Name" class="form-control mb-3">
   <textarea name="description"  placeholder="Albums Description"  class="form-control mb-3" cols="30" rows="10" ></textarea>
   <div class="form-group">
    <input type="file" name="cover_image" class="form-control-file mb-3">
   </div>

    <button type="submit" class="btn btn-primary">Submit</button>


</form>
@endsection
