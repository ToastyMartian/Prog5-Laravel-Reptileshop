@extends ('layouts.layout')

@section('content')
    <div class="card-group">
        <div class="card">
            <img src="./public/images/snake.jpg" class="card-img-top" alt="snake">
            <div class="card-body">
                <h5 class="card-title">Slangen</h5>
                <p class="card-text">Slangen worden vaak van een negatieve kant bekeken door de mens. Echter kunnen deze diertjes ontzettend tam zijn en zelfs geschikt als huisdier. Zeker de kleinere slangsoorten hebben erg weinig onderhoud nodig, wat het houden van deze dieren nog makkelijker maakt.</p>
                <p class="card-text"><small class="text-muted">Bekijk slangen te koop</small></p>
            </div>
        </div>
        <div class="card">
            <img src="./public/images/lizard.jpg" class="card-img-top" alt="lizard">
            <div class="card-body">
                <h5 class="card-title">Hagedissen</h5>
                <p class="card-text">Hagedissen zijn de bekende kleine beestjes, die zich ogenschijnlijk op elk oppervlak kunnen bevinden. Daarnaast hebben ze een uniek lichaampje met staartjes die varieren van lang naar kort, en van dik naar dun.</p>
                <p class="card-text"><small class="text-muted">Bekijk hagedissen te koop</small></p>
            </div>
        </div>
        <div class="card">
            <img src="./public/images/turtle.jpg" class="card-img-top" alt="turtle">
            <div class="card-body">
                <h5 class="card-title">Schildpadden</h5>
                <p class="card-text">Schildpadden zijn zo ook een uniek huisdier om te hebben. Zo heb je beide de normale schildpadden, en de landschildpadden, met daaronder vele diverse soorten. Hun unieke schild geeft ze dat bekende kenmerk van een schildpad.</p>
                <p class="card-text"><small class="text-muted">Bekijk schildpadden te koop</small></p>
            </div>
        </div>
        <div class="card">
            <img src="./public/images/crocodile.jpg" class="card-img-top" alt="crocodile">
            <div class="card-body">
                <h5 class="card-title">Krokodilachtigen</h5>
                <p class="card-text">Krokodilachtigen, het woord zegt het al. Dit zijn de wat pittigere huisdieren onder de reptielen soorten. Doordat het vaak door professionals niet wordt aangeraden om zo'n diertje als huisdier te hebben, vergt een krokodilachtige wat meer professionele zorg. Daarom verkopen wij ook alleen niet-gefokte krokodilachtigen.</p>
                <p class="card-text"><small class="text-muted">Bekijk krokodilachtigen te koop</small></p>
            </div>
        </div>
    </div>
    <a href="{{route('home')}}">Back to home</a>

    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
        Build v{{ Illuminate\Foundation\Application::VERSION }}
    </div>
@endsection
