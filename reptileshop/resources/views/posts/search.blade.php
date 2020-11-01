@extends ('layouts.layout')

@section('content')
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
@endsection
