<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{asset("css/style.css")}}>
    <link rel="stylesheet" href={{asset("css/bootstrap.css")}}>
    <title>@yield('title')</title>
</head>
<body class="unselectable">

    @include('inc.login')
    <div class="container">@include('inc.messages')</div>


    @yield('home')
    <div class="py-4 container">
        @yield('content')
    </div>
    <div class="card-container">
        @yield('index')
    </div>


<script src={{asset("js/bootstrap.bundle.js")}}></script>
<script src={{asset("js/javascript.js")}}></script>
</html>
