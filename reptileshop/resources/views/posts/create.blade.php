@extends ('layouts.layout')

@section('content')
    <h3>Maak een nieuwe post aan</h3>
    <form method="post" action="{{route('posts.store')}}">
        {{@csrf_field()}}
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="name">Naam</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Geef jouw product een passende titelnaam.." required>
            </div>
            <div class="form-group col-md-6">
                <label for="description">Beschrijving</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Beschrijf het product.." required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="category_id">Kies een categorie</label>
                <select id="category_id" class="form-control" name="category_id">
                    <option value="null" selected>Kies...</option>
                    <option value="1">Reptielen</option>
                    <option value="2">Amfibieen</option>
                    <option value="3">Benodigdheden</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="price">Prijs</label>
                <input type="number" class="form-control" id="price" name="price" min="1" placeholder="Geef een prijs op voor het product.." required>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Voeg post toe</button>
    </form>

    <a href="{{route('home')}}">Terug naar home</a>

    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
        Build v{{ Illuminate\Foundation\Application::VERSION }}
    </div>
@endsection
