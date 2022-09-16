@extends('layouts.app')

@section('home')
@if(Auth::user())
<script>window.location = "/albums";</script>
@else
<div class="container home">
    <div class="description">
        <h1>PhotoShow</h1>
       <p style="color: rgb(73, 73, 73) ;"> PhotoShow is a tool that allows you to access your picture in albums from anywhere in the world!
        For take the advantage of our service you have to login first.</p>
    </div>
    <img src="home\screenshot-1.png"alt="" class="side-image">

</div>
@endif

@endsection
