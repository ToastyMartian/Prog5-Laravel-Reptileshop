@extends ('layouts.layout')

@section('content')
    <div class="card-group">
        <div class="card bg-dark text-white">
            <img src="{{asset('images/enclosure.jpg')}}" class="card-img" alt="enclosure">
            <div class="card-img-overlay">
                <h5 class="card-title"><a href="{{route('supplies.enclosures')}}" class="text-white text-decoration-none">Verblijven</a></h5>
                <p class="card-text">Elk dier dat hier word verkocht, heeft ook een eigen verblijf nodig.<br>
                    Zo heb je verschillende maten aan verblijven, maar ook verschillende types zoals een aquarium.<br>
                    Uiteraard word toch vaak een glazen verblijf voor reptielen aangeraden naast de plastics die je vaak bij fokkers ziet.<br>
                    Hier kan je specifieke verblijven kopen, met sloten die zelfs de grootste Houdini's onder reptielen niet uit zou kunnen vogelen.</p>
                <a href="{{route('supplies.enclosures')}}" class="btn btn-primary btn-dark"><small class="text-muted">Bekijk verblijven te koop</small></a>
            </div>
        </div>
        <div class="card bg-dark text-white">
            <img src="{{asset('images/food.jpg')}}" class="card-img" alt="food">
            <div class="card-img-overlay">
                <h5 class="card-title"><a href="{{route('supplies.foods')}}" class="text-white text-decoration-none">Voer</a></h5>
                <p class="card-text">Natuurlijk hebben deze exotische dieren ook hun specifieke variatie aan voedsel nodig.<br>
                    Van fruit, naar insecten, naar diverse knaagdieren. Zo heeft elk dier zijn of haar voorkeur.<br>
                    Naast de voedselitems, verkopen wij ook voerbakken en supplementen voor vitamines of zelfs calcium.<br>
                    Dit zijn voedingsstoffen die soms ontbreken in het dieet van een exotisch huisdier of een kieskeurige eter.</p>
                <a href="{{route('supplies.foods')}}" class="btn btn-primary btn-dark"><small class="text-muted">Bekijk voedsel te koop</small></a>
            </div>
        </div>
        <div class="card bg-dark text-white">
            <img src="{{asset('images/substrate.jpg')}}" class="card-img" alt="substrate">
            <div class="card-img-overlay">
                <h5 class="card-title"><a href="{{route('supplies.substrates')}}" class="text-white text-decoration-none">Substraat</a></h5>
                <p class="card-text">Voor het klaarmaken van het verblijf, is er ook vaak substraat nodig.<br>
                    Zo hebben wij houtsnippers, hout vezels, kokos vezels, en nog veel meer, waaronder ook bekende merken.<br>
                    Het type substraat dat nodig is, hangt erg af van welk exotisch dier erin gaat leven.<br>
                    Hier speelt niet alleen de vochtigheidsgraad van het verblijf een grote rol, maar ook het gebruik van springstaarten en/of pissebedden.</p>
                <a href="{{route('supplies.substrates')}}" class="btn btn-primary btn-dark"><small class="text-muted">Bekijk substraat te koop</small></a>
            </div>
        </div>
        <div class="card bg-dark text-white">
            <img src="{{asset('images/accessories.jpg')}}" class="card-img" alt="accessories">
            <div class="card-img-overlay">
                <h5 class="card-title"><a href="{{route('supplies.accessories')}}" class="text-white text-decoration-none">Accessoires</a></h5>
                <p class="card-text">Voor het decoreren van je verblijf, heb je natuurlijk ook wat decoratie nodig.<br>
                    Zo kan het dier zich beter vermaken en ziet het verblijf er ook wat gezelliger uit.<br>
                    Daarnaast kan je hier ook benodigdheden zoals waterbakken, hittematten/lampen en vochtigheids boxen aanschaffen.<br>
                    Dit geeft het dier een ideale en essentiele leefomgeving binnen het verblijf.</p>
                <a href="{{route('supplies.accessories')}}" class="btn btn-primary btn-dark"><small class="text-muted">Bekijk accessoires te koop</small></a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Te koop
        </div>
        <div class="card-body">
            <h5 class="card-title">Alle benodigdheden</h5>
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
