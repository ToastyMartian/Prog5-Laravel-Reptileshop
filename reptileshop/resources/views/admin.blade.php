@extends ('layouts.layout')

@section('content')
    <h1>Welkom admin!</h1><br>
    <a href="{{route('posts.index')}}" class="btn btn-primary">Bekijk posts</a>
    <h2 class="col-md">Alle gebruikers</h2><br>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Naam</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{route('home')}}" class="btn btn-primary">Terug</a>
    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
        Build v{{ Illuminate\Foundation\Application::VERSION }}
    </div>
@endsection
