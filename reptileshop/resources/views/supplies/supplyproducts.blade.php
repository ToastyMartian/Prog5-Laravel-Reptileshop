@extends ('layouts.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            Te koop
        </div>
        <div class="card-body">
            <h5 class="card-title">Alle benodigdheden</h5>
            <p class="card-text">Filter hier eventueel op meerdere categorieen</p>
        </div>
    </div>

    <div class="card-group">
        @forelse ($products as $product)
            <div class="card">
                <img src="{{$product->image}}" class="card-img-top" alt="product image">
                <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                    <a href="{{route('products.show', $product->id)}}" class="btn btn-primary">Zie details</a>
                </div>
            </div>
        @empty
            <p>Er zijn geen (zoek)resultaten gevonden, probeer iets anders te zoeken.</p>
        @endforelse
    </div>

    <a href="{{route('home')}}">Back to home</a>

    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
        Build v{{ Illuminate\Foundation\Application::VERSION }}
    </div>
@endsection
