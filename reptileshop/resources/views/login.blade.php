@extends ('layout')

@section('content')
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endif
            </div>
        @endif

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <form action="login.blade.php">
                        <label for="username">Gebruikersnaam: </label>
                        <input type="text" id="username" name="username"><br>

                        <label for="password">Password: </label>
                        <input type="password" id="password" name="password"><br>
                    </form>
                </div>
            </div>

            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 sm:text-left">
                    <div class="flex items-center">
                        <a href="{{route('login')}}" class="ml-1 underline">
                            Log in
                        </a>


                        <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                            Registreer
                        </a>
                    </div>
                </div>

                <a href="{{route('home')}}">Back to home</a>

                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    Build v{{ Illuminate\Foundation\Application::VERSION }}
                </div>
            </div>
        </div>
    </div>
@endsection
