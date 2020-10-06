@extends ('layouts.layout')

@section('content')
    <div class="card bg-dark text-white">
        <img src="{{asset('images/reptile.jpg')}}" class="card-img" alt="reptile">
        <div class="card-img-overlay">
            <h5 class="card-title"><a href="{{route('reptiles')}}" class="text-white text-decoration-none">Reptielen</a></h5>
            <p class="card-text">Shop naar allerlei verschillende reptielen, zoals slangen, hagedissen, schildpadden, en krokodilachtigen!<br>
                Ook kunt u met uw eigen fok bedrijf een reptiel via onze website verkopen.<br>
                Indien u een reptiel wilt aanschaffen, vragen wij u eerst een <a href="#" class="btn btn-primary btn-dark text-muted">toetsing</a> af te leggen.<br>
                Dit doen wij om te verifieren dat de koper werkelijk goed voor het dier kan zorgen.<br>
                Uiteraard kunt u altijd gewoon het aanbod aan reptielen bekijken.</p>
            <a href="#" class="btn btn-primary btn-dark"><small class="text-muted">Bekijk reptielen te koop</small></a>
        </div>
    </div>
    <div class="card bg-dark text-white">
        <img src="{{asset('images/amphibian.jpg')}}" class="card-img" alt="amphibian">
        <div class="card-img-overlay">
            <h5 class="card-title"><a href="{{route('amphibians')}}" class="text-white text-decoration-none">Amfibieen</a></h5>
            <p class="card-text">Bekijk ook de verschillende amfibieen die wij op onze website beschikbaar hebben, zoals kikkers, padden, en salamanders.<br>
                Ook deze kunnen als fok bedrijf verkocht worden.<br>
                Indien u een amfibie wilt aanschaffen, vragen wij u eerst een <a href="#" class="btn btn-primary btn-dark text-muted">toetsing</a> af te leggen.<br>
                Dit doen wij om te verifieren dat de koper werkelijk goed voor het dier kan zorgen.<br>
                Uiteraard kunt u altijd gewoon het aanbod aan amfibieen bekijken.</p>
            <a href="#" class="btn btn-primary btn-dark"><small class="text-muted">Bekijk amfibieen te koop</small></a>
        </div>
    </div>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-2">

                <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                    <div class="flex items-center">
                        <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{route('supplies')}}" class="underline text-gray-900 dark:text-white">Benodigdheden</a></div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Zoekt u nog naar een nieuw verblijf? Of is de voorraad aan voedsel op? Dan zit u hier goed. Naast het verkopen van verschillende exotische dieren, verkopen wij ook via meerdere bedrijven verschillende benodigdheden.
                        </div>
                    </div>
                </div>

                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                    <div class="flex items-center">
                        <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{route('about')}}" class="underline text-gray-900 dark:text-white">Over Exoticshop</a></div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Zoals eerder genoemd, zijn wij een online webshop, die via verschillende fokkers en bedrijven diverse reptielen, amfibieen, en de nodige producten verkoopt. Zo geven wij een platform aan specifiek Nederlandse fokkers, zodat deze makkelijker te bereiken zijn.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
            <div class="text-center text-sm text-gray-500 sm:text-left">
                <div class="flex items-center">

                    <a href="{{route('login')}}" class="ml-1 underline">
                        Log in
                    </a>

                    <a href="{{route('register')}}" class="ml-1 underline">
                        Registeer
                    </a>
                </div>
            </div>

            <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                Build v{{ Illuminate\Foundation\Application::VERSION }}
            </div>
        </div>
    </div>
@endsection
