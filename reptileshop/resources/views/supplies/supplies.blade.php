@extends ('layouts.layout')

@section('content')

    <div class="card">
        <div class="card-header">
            Te koop
        </div>
        <div class="card-body">
            <h5 class="card-title">Alle benodigdheden</h5>
            <p class="card-text">Filter hier eventueel op meerdere categorieen</p>
            <a href="{{route('supplies.products')}}" class="btn btn-primary">Zie alle benodigdheden</a>
        </div>
    </div>


    <a href="{{route('home')}}">Back to home</a>

    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
        Build v{{ Illuminate\Foundation\Application::VERSION }}
    </div>
@endsection
