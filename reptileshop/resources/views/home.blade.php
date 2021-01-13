@extends ('layouts.layout')

@section('content')
    <div class="fixed-bottom end-0">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="#up">
                    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-up-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
                    </svg>
                    <p>Naar boven</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#down">
                    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-down-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                    </svg>
                    <p>Naar beneden</p>
                </a>
            </li>
        </ul>
    </div>

    <div class="card bg-dark text-white" id="up">
        <img src="{{asset('images/reptile.jpg')}}" class="card-img" alt="reptile">
        <div class="card-img-overlay">
            <h5 class="card-title"><a href="#" class="text-white text-decoration-none">Reptielen</a></h5>
            <p class="card-text">Shop naar allerlei verschillende reptielen, zoals slangen, hagedissen, schildpadden, en krokodilachtigen!<br>
                Ook kunt u met uw eigen fok bedrijf een reptiel via onze website verkopen.<br>
        </div>
    </div>
    <div class="card bg-dark text-white">
        <img src="{{asset('images/amphibian.jpg')}}" class="card-img" alt="amphibian">
        <div class="card-img-overlay">
            <h5 class="card-title"><a href="#" class="text-white text-decoration-none">Amfibieen</a></h5>
            <p class="card-text">Bekijk ook de verschillende amfibieen die wij op onze website beschikbaar hebben, zoals kikkers, padden, en salamanders.<br>
                Ook deze kunnen als fok bedrijf verkocht worden.<br>
        </div>
    </div>
    <div class="card bg-dark text-white">
        <img src="{{asset('images/supply.jpg')}}" class="card-img" alt="supplies">
        <div class="card-img-overlay">
            <h5 class="card-title"><a href="#" class="text-white text-decoration-none">Benodigdheden</a></h5>
            <p class="card-text">Zoekt u nog naar een nieuw verblijf? Of is de voorraad aan voedsel op? Dan zit u hier goed.<br>
                Naast het verkopen van verschillende exotische dieren, verkopen wij ook via meerdere bedrijven verschillende benodigdheden.<br>
        </div>
    </div>

    <div class="card" id="down">
        <div class="card-header">
            Te koop
        </div>
        <div class="card-body">
            <h5 class="card-title">Alle producten</h5>
            <form method="get" action="{{url('/')}}">
{{--                {{@csrf_field()}}--}}
                <div class="form-row">
                    <div class="form-group">
                        <label for="categories">Filter hier eventueel op verschillende categorieen:</label>
                        <select id="categories" name="category" class="form-control">
                            <option>Kies een categorie</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Sorteer</button>
            </form><br>

            <p>of</p>

            <form type="get" action="{{route('search')}}">
                {{@csrf_field()}}
                <label for="search">Zoek naar producten:</label>
                <input class="form-control" name="query" type="search" placeholder="Zoek naar producten" aria-label="Search">
                <button class="btn btn-primary" type="submit">Zoek</button>
            </form>
        </div>
    </div>

    <div class="card-group">
        @forelse ($posts as $post)
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$post->name}}</h5>
                            <form method="post" action="{{route('favourite', $post->id)}}">
                                {{@csrf_field()}}
                                <button type="submit" class="btn btn-outline-warning" id="{{$post->id}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="orange" class="bi bi-star" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                    </svg>
                                </button>
                            </form>
                        <a href="{{route('posts.show', $post->id)}}" class="btn btn-success">Zie details</a>
                        <hr>
                        <p>{{$post->category->name}}</p>
                    </div>
                </div>
        @empty
                <p>Er zijn geen (zoek)resultaten gevonden, probeer iets anders te zoeken.</p>
        @endforelse
    </div>

    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
        Build v{{ Illuminate\Foundation\Application::VERSION }}
    </div>
@endsection
