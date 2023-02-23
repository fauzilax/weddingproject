<!DOCTYPE html>
<html lang="en">
<head>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
    />
    <title>{{ $title }}</title>
    {{------------------ Public Link CSS --------------------}}
    <link rel="stylesheet" href="{{ url('/css/homeSec1.css') }}">
    <link rel="stylesheet" href="{{ url('/css/homeSec2.css') }}">
    <link rel="stylesheet" href="{{ url('/css/homeSec3.css') }}">
    <link rel="stylesheet" href="{{ url('/css/homeSec4.css') }}">
    <link rel="stylesheet" href="{{ url('/css/homeSec5.css') }}">
    <link rel="stylesheet" href="{{ url("/css/souvenirs.css") }}">

    {{------------------ Online Link CSS --------------------}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    {{---------------- Public Link Java Script --------------}}
    {{---------------- typenya javascript tapi gak tau kenapa harus disimpen diatas kalo gk pasti error--------------}}    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
   
</head>
<body>
    @include('navbar')

    @yield('body')

  {{-- Still Progress --}}



    {{---------------- Public Link Java Script --------------}}
    <script src="{{ url('javascript/home.js') }}"></script>
    <script src="{{ url('javascript/home2.js') }}"></script>
    <script src="{{ url('javascript/home3.js') }}"></script>
    <script src="{{ url('javascript/home4.js') }}"></script>

    {{---------------- Online Link Java Script --------------}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>