@extends ('layouts.layout')

@section('content')

    <div class="card">
        <div class="card-header">
            Te koop
        </div>
        <div class="card-body">
            <h5 class="card-title">Alle reptielen</h5>
        </div>
    </div>

    <div class="card-group">
        @forelse ($posts as $post)
            <div class="card">
                {{--                    <img src="{{$post->image}}" class="card-img-top" alt="product image">--}}
                <div class="card-body">
                    <h5 class="card-title">{{$post->name}}</h5>
                    <hr>
                    <p>{{$category->name}}</p>
                    <a href="{{route('posts.show', $post->id)}}" class="btn btn-success">Zie details</a>
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
