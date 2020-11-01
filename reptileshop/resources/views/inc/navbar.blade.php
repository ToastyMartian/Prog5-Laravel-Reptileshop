<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{route('home')}}">ExoticShop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Reptielen
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('reptiles.snakes')}}">Slangen</a>
                    <a class="dropdown-item" href="{{route('reptiles.lizards')}}">Hagedissen</a>
                    <a class="dropdown-item" href="{{route('reptiles.turtles')}}">Schildpadden</a>
                    <a class="dropdown-item" href="{{route('reptiles.crocodiles')}}">Krokodilachtigen</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('reptiles')}}">Zie alle reptielen</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Amfibieen
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('amphibians.frogs')}}">Kikkers</a>
                    <a class="dropdown-item" href="{{route('amphibians.toads')}}">Padden</a>
                    <a class="dropdown-item" href="{{route('amphibians.salamanders')}}">Salamanders</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('amphibians')}}">Zie alle amfibieen</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Benodigdheden
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('supplies.enclosures')}}">Verblijven</a>
                    <a class="dropdown-item" href="{{route('supplies.foods')}}">Voer</a>
                    <a class="dropdown-item" href="{{route('supplies.substrates')}}">Substraat</a>
                    <a class="dropdown-item" href="{{route('supplies.accessories')}}">Accessoires</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('supplies')}}">Zie alle benodigdheden</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('register')}}">Register</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" type="get" action="{{url('/search')}}">
            <input class="form-control mr-sm-2" name="query" type="search" placeholder="Zoek naar producten" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
