@extends ('layouts.layout')

@section('content')
    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputType">Choose a product type</label>
                <select id="inputType" class="form-control">
                    <option selected>Choose...</option>
                    <option>Reptile</option>
                    <option>Amphibian</option>
                    <option>Supplies</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputSubType">Choose a sub type</label>
                <select id="inputSubType" class="form-control">
                    <option selected>Choose...</option>
                    <option>Snake</option>
                    <option>Lizard</option>
                    <option>Turtle</option>
                    <option>Crocodile</option>

                    <option>Frog</option>
                    <option>Toad</option>
                    <option>Salamander</option>

                    <option>Enclosure</option>
                    <option>Accessory</option>
                    <option>Food</option>
                    <option>Substrate</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>

    <a href="{{route('home')}}">Back to home</a>

    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
        Build v{{ Illuminate\Foundation\Application::VERSION }}
    </div>
@endsection
