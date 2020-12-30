@extends ('layouts.layout')

@section('content')
    <h3>Maak een nieuwe post aan</h3>
    <a href="#" class="btn btn-primary">Nieuw</a>

    <h3>Bekijk je huidige posts</h3>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Naam</th>
            <th scope="col">Prijs</th>
            <th scope="col">Beschrijving</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td><a href="{{route('products.show', $product->id)}}">Zie details</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a href="{{route('home')}}">Terug naar home</a>

    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
        Build v{{ Illuminate\Foundation\Application::VERSION }}
    </div>
@endsection
