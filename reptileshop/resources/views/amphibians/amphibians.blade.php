@extends ('layouts.layout')

@section('content')
    <div class="card-group">
        <div class="card bg-dark text-white">
          <img src="{{asset('images/frog.jpg')}}" class="card-img" alt="frog">
         <div class="card-img-overlay">
                <h5 class="card-title"><a href="{{route('amphibians.frogs')}}" class="text-white text-decoration-none">Kikkers</a></h5>
               <p class="card-text">Bij kikker denk je al vaak aan de typische groene amfibie met kraaloogjes en soms rode wangetjes.<br>
               Uiteraard zijn er veel meer verschillende soorten kikkers dan onze groene vriend.<br>
               Een populaire kikker als huisdier is bijvoorbeeld de koraalteenboomkikker.<br>
               Deze staan bekend om de mooie, zachtgroene of zelfs blauwe kleur en de gladde huid.</p>
               <a href="{{route('amphibians.frogs')}}" class="btn btn-primary btn-dark"><small class="text-muted">Bekijk kikkers te koop</small></a>
         </div>
     </div>
     <div class="card bg-dark text-white">
         <img src="{{asset('images/toad.jpg')}}" class="card-img" alt="toad">
         <div class="card-img-overlay">
              <h5 class="card-title"><a href="{{route('amphibians.toads')}}" class="text-white text-decoration-none">Padden</a></h5>
                    <p class="card-text">Padden worden vaak verward met kikkers.<br>
                    Echter zijn deze vrij anders dan kikkers, en vaak ook minder populair als huisdier.<br>
                    Padden zijn vaak een stuk groter en hebben een bruinachtige kleur in plaats van de felle kleuren bij kikkers.<br>
                    Zo is de Amerikaanse pad een populaire pad om te houden als huisdier.</p>
               <a href="{{route('amphibians.toads')}}" class="btn btn-primary btn-dark"><small class="text-muted">Bekijk padden te koop</small></a>
         </div>
     </div>
     <div class="card bg-dark text-white">
           <img src="{{asset('images/salamander.jpg')}}" class="card-img" alt="salamander">
          <div class="card-img-overlay">
             <h5 class="card-title"><a href="{{route('amphibians.salamanders')}}" class="text-white text-decoration-none">Salamanders</a></h5>
                <p class="card-text">Salamanders lijken erg op hun reptielen broer: de hagedis.<br>
                Wat deze salamanders uniek maken, is hun affiniteit met het leven onder water.<br>
                Salamanders zijn daarom ook te onderscheiden van hagedissen door een gladdere huid.<br>
                Een recente populaire salamander is bijvoorbeeld de axolotl, die met hun schattige gezicht veel tractie kreeg.</p>
               <a href="{{route('amphibians.salamanders')}}" class="btn btn-primary btn-dark"><small class="text-muted">Bekijk salamanders te koop</small></a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Te koop
        </div>
        <div class="card-body">
            <h5 class="card-title">Alle amfibieen</h5>
            <p class="card-text">Filter hier eventueel op meerdere categorieen</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>


    <a href="{{route('home')}}">Back to home</a>

    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
        Build v{{ Illuminate\Foundation\Application::VERSION }}
    </div>
@endsection
