@extends ('layouts.layout')

@section('content')
    <h1>Welkom admin!</h1>
    <a href="{{route('home')}}">Terug naar home</a>
    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
        Build v{{ Illuminate\Foundation\Application::VERSION }}
    </div>
@endsection
