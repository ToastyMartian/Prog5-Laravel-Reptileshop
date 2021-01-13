@extends('layouts.layout')

@section('content')
    <div class="card text-center">
        <form method="post" action="{{route('posts.update', $post->id)}}">
            {{@csrf_field()}}
            {{ method_field('PATCH') }}
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="name">Naam</label>
                    <input value="{{$post->name}}" type="text" class="form-control" id="name" name="name" placeholder="Geef jouw product een passende titelnaam.." required>
                </div>
                <div class="form-group col-md-6">
                    <label for="description">Beschrijving</label>
                    <input value="{{$post->description}}" type="text" class="form-control" id="description" name="description" placeholder="Beschrijf het product.." required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="category_id">Kies een categorie</label>
                    <select id="category_id" class="form-control" name="category_id">
                        <option value="{{$post->category->id}}" selected>{{$post->category->name}}</option>
                        <option value="1">Reptielen</option>
                        <option value="2">Amfibieen</option>
                        <option value="3">Benodigdheden</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="price">Prijs</label>
                    <input value="{{$post->price}}" type="number" class="form-control" id="price" name="price" min="1" placeholder="Geef een prijs op voor het product.." required>
                </div>
            </div>
                <button type="submit" class="btn btn-success">Opslaan</button>
                <a href="{{route('posts.show', $post->id)}}" class="btn btn-primary">Terug</a>
        </form>
    </div>
@endsection
