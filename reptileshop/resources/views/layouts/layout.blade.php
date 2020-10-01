<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <nav class ="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"> Logo </a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{route('home')}}"> Home </a></li>
                <li><a href="{{route('about')}}"> About </a></li>
                <li><a href="{{route('reptiles')}}"> Reptiles </a></li>
                <li><a href="{{route('amphibians')}}"> Amphibians </a></li>
                <li><a href="{{route('supplies')}}"> Supplies </a></li>
            </ul>
        </div>
    </nav>

    <title>ExoticShop</title>
</head>
<body class="antialiased">
    @yield ('content')
</body>
</html>
