@extends ('layouts.layout')

@section('content')
    <h3>Maak een nieuwe post aan</h3>
    <form method="post" action="{{url('/newpost')}}">
        {{@csrf_field()}}
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="type">Kies een product type</label>
                <select id="type" class="form-control" name="type">
                    <option selected>Kies...</option>
                    <option>Reptiel</option>
                    <option>Amfibie</option>
                    <option>Benodigdheid</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputSubType">Kies een sub type</label>
                <select id="inputSubType" class="form-control">
                    <option selected>Kies...</option>
                    <option>Slang</option>
                    <option>Hagedis</option>
                    <option>Schildpad</option>
                    <option>Krokodil</option>

                    <option>Kikker</option>
                    <option>Pad</option>
                    <option>Salamander</option>

                    <option>Verblijf</option>
                    <option>Accessoire</option>
                    <option>Voedsel</option>
                    <option>Substraat</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="name">Titel</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Geef jouw product een passende titelnaam.." required>
            </div>
            <div class="form-group col-md-6">
                <label for="description">Beschrijving</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Beschrijf het product.." required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="price">Prijs</label>
                <input type="number" class="form-control" id="price" name="price" min="1" placeholder="Geef een prijs op voor het product.." required>
            </div>
            <div class="form-group col-md-4">
                <label for="image">Foto</label>
                <input type="file" class="form-control" id="image" name="image" alt="photo" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <a href="{{route('home')}}">Back to home</a>

    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
        Build v{{ Illuminate\Foundation\Application::VERSION }}
    </div>
@endsection
