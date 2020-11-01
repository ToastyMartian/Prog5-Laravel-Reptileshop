@extends ('layouts.layout')

@section('content')
    <div class="card-group">
        <div class="card bg-dark text-white">
            <img src="{{asset('images/snake.jpg')}}" class="card-img" alt="snake">
            <div class="card-img-overlay">
                <h5 class="card-title"><a href="{{route('reptiles.snakes')}}" class="text-white text-decoration-none">Slangen</a></h5>
                <p class="card-text">Slangen worden vaak van een negatieve kant bekeken door de mens. Echter kunnen deze diertjes ontzettend tam zijn en zelfs geschikt als huisdier.<br>
                    Zeker de kleinere slangsoorten hebben erg weinig onderhoud nodig, wat het houden van deze dieren nog makkelijker maakt.<br>
                    De meest populaire slangenrassen voor houders zijn vaak Koningspythons.<br>
                    Deze hebben een grote variatie aan morphs, met veel kleur- en patroonverschillen.</p>
                <a href="{{route('reptiles.snakes')}}" class="btn btn-primary btn-dark"><small class="text-muted">Bekijk slangen te koop</small></a>
            </div>
        </div>
        <div class="card bg-dark text-white">
            <img src="{{asset('images/lizard.jpg')}}" class="card-img" alt="lizard">
            <div class="card-img-overlay">
                <h5 class="card-title"><a href="{{route('reptiles.lizards')}}" class="text-white text-decoration-none">Hagedissen</a></h5>
                <p class="card-text">Hagedissen zijn de bekende kleine beestjes, die zich ogenschijnlijk op elk oppervlak kunnen bevinden.<br>
                    Daarnaast hebben ze een uniek lichaampje met staartjes die varieren van lang naar kort, en van dik naar dun.<br>
                    Zo heb je bijvoorbeeld de bekende kameleons of de luipaardgekko's.<br>
                    Deze gekko's zijn vaak te herkennen aan de staart, die bijna net zo dik zijn als het lichaampje.</p>
                <a href="{{route('reptiles.lizards')}}" class="btn btn-primary btn-dark"><small class="text-muted">Bekijk hagedissen te koop</small></a>
            </div>
        </div>
        <div class="card bg-dark text-white">
            <img src="{{asset('images/turtle.jpg')}}" class="card-img" alt="turtle">
            <div class="card-img-overlay">
                <h5 class="card-title"><a href="{{route('reptiles.turtles')}}" class="text-white text-decoration-none">Schildpadden</a></h5>
                <p class="card-text">Schildpadden zijn zo ook een uniek huisdier om te hebben, vaak wonend in een aquarium.<br>
                    Zo heb je beide de normale schildpadden, en de landschildpadden, met daaronder vele diverse soorten.<br>
                    Hun unieke schild geeft ze dat bekende kenmerk van een schildpad.</p>
                <a href="{{route('reptiles.turtles')}}" class="btn btn-primary btn-dark"><small class="text-muted">Bekijk schildpadden te koop</small></a>
            </div>
        </div>
        <div class="card bg-dark text-white">
            <img src="{{asset('images/crocodile.jpg')}}" class="card-img" alt="crocodile">
            <div class="card-img-overlay">
                <h5 class="card-title"><a href="{{route('reptiles.crocodiles')}}" class="text-white text-decoration-none">Krokodilachtigen</a></h5>
                <p class="card-text">Krokodilachtigen, het woord zegt het al. Dit zijn de wat pittigere huisdieren onder de reptielen soorten.<br>
                    Doordat het vaak door professionals niet wordt aangeraden om zo'n diertje als huisdier te hebben, vergt een krokodilachtige wat meer professionele zorg.<br>
                    Daarom verkopen wij ook alleen niet-gefokte krokodilachtigen.</p>
                <a href="{{route('reptiles.crocodiles')}}" class="btn btn-primary btn-dark"><small class="text-muted">Bekijk krokodilachtigen te koop</small></a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Te koop
        </div>
        <div class="card-body">
            <h5 class="card-title">Alle reptielen</h5>
            <p class="card-text">Filter hier eventueel op meerdere categorieen</p>
        </div>
    </div>

    @forelse ($products as $product)
        <div class="card p-3">
            <h3><a href="product/{{$product->id}}">{{$product->name}}</a></h3>
            <a href="#" class="btn btn-primary">Zie details</a>
        </div>
    @empty
        <p>Er zijn geen (zoek)resultaten gevonden, probeer iets anders te zoeken.</p>
    @endforelse


    <a href="{{route('home')}}">Back to home</a>

    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
        Build v{{ Illuminate\Foundation\Application::VERSION }}
    </div>
@endsection
