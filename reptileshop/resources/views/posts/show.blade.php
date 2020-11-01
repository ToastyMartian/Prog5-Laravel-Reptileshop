@extends('lauouts.layout')

@section('content')
    <a href="{{route('amphibians')}}" class="btn btn-default">Go back</a>
    <h1>{{$product->name}}</h1>
    <div>
        {{$product->image}}
        {{$product->price}}
        {{$product->description}}
    </div>
    <small>Created at {{$product->created_at}}</small>
@endsection
