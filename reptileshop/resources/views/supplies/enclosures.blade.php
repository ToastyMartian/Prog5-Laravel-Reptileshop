@extends ('layouts.layout')

@section('content')
    <a href="{{route('home')}}">Back to home</a>

    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
        Build v{{ Illuminate\Foundation\Application::VERSION }}
    </div>
@endsection
