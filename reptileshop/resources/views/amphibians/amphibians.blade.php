@extends ('layouts.layout')

@section('content')

    <div class="card">
        <div class="card-header">
            Te koop
        </div>
        <div class="card-body">
            <h5 class="card-title">Alle producten</h5>

            <form method="get" action="{{url('/')}}">
                {{@csrf_field()}}
                <div class="form-row">
                    <div class="form-group">
                        <label for="categories">Filter hier eventueel op verschillende categorieen:</label>
                        <select class="form-control">
                            <option>Kies een categorie</option>
                            @foreach($posts as $post)
                                <option name="id" type="filter">{{$post->category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Zoek</button>
            </form><br>

            <p>of</p>

            <form type="get" action="{{url('/search')}}">
                {{@csrf_field()}}
                <label for="search">Zoek naar producten:</label>
                <input class="form-control" name="query" type="search" placeholder="Zoek naar producten" aria-label="Search">
                <button class="btn btn-primary" type="submit">Zoek</button>
            </form>
        </div>
    </div>

    <div class="card-group">
        @forelse ($posts as $post)
            <div class="card">
                {{--                    <img src="{{$post->image}}" class="card-img-top" alt="product image">--}}
                <div class="card-body">
                    <h5 class="card-title">{{$post->name}}</h5>
                    <hr>
                    <p>{{$post->category->name}}</p>
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
