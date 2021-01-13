@extends ('layouts.layout')

@section('content')
    <h1 class="col-md">Alle posts</h1><br>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Naam</th>
            <th scope="col">Beschrijving</th>
            <th scope="col">Categorie</th>
            <th scope="col">Prijs</th>
            <th scope="col">Favoriet?</th>
            <th scope="col">Overig</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->name}}</td>
                <td>{{$post->description}}</td>
                <td>{{$post->category->name}}</td>
                <td>{{$post->price}} euro</td>
                <td><a class="btn btn-outline-warning" href="{{route('posts.show', $post->id)}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="orange" class="bi bi-star" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                        </svg>
                    </a>
                </td>
                <td><a href="{{route('posts.show', $post->id)}}">Zie details</a></td>
                <td><a href="{{route('posts.edit', $post->id)}}" class="btn btn-success">Wijzigen</a></td>
                <td>
                    <form method="post" action="{{route('posts.destroy', $post->id)}}">
                        {{@csrf_field()}}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger">Verwijderen</button>
                    </form>
                </td>
                <td><form method="post" action="{{route('posts.deactivate', $post->id)}}">
                        {{@csrf_field()}}
                        @if($post->active == true)
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" checked>
                                <input type="submit" class="custom-control-input" id="{{$post->id}}">
                                <label class="custom-control-label" for="{{$post->id}}">Post deactiveren</label>
                            </div>
                        @else
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input">
                                <input type="submit" class="custom-control-input" id="{{$post->id}}">
                                <label class="custom-control-label" for="{{$post->id}}">Post activeren</label>
                            </div>
                        @endif
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
