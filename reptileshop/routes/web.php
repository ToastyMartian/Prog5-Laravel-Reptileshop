<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Homepage
Route::get('/', 'HomeController@show')->name('home');

//Reptile routes
Route::get('/reptiles', 'ReptileController@show')->name('reptiles');
Route::get('/reptiles/snakes', 'ReptileController@snake')->name('reptiles.snakes');
Route::get('/reptiles/crocodiles', 'ReptileController@crocodile')->name('reptiles.crocodiles');
Route::get('/reptiles/lizards', 'ReptileController@lizard')->name('reptiles.lizards');
Route::get('/reptiles/turtles', 'ReptileController@turtle')->name('reptiles.turtles');

//Amphibian routes
Route::get('/amphibians', 'AmphibianController@show')->name('amphibians');
Route::get('/amphibians/frogs', 'AmphibianController@frog')->name('amphibians.frogs');
Route::get('/amphibians/toads', 'AmphibianController@toad')->name('amphibians.toads');
Route::get('/amphibians/salamanders', 'AmphibianController@salamander')->name('amphibians.salamanders');

//Supply routes
Route::get('/supplies', 'SuppliesController@show')->name('supplies');
Route::get('/supplies/accessories', 'SuppliesController@accessory')->name('supplies.accessories');
Route::get('/supplies/enclosures', 'SuppliesController@enclosure')->name('supplies.enclosures');
Route::get('/supplies/foods', 'SuppliesController@food')->name('supplies.foods');
Route::get('/supplies/substrates', 'SuppliesController@substrate')->name('supplies.substrates');

//Post routes + about
Route::get('/about', 'AboutController@show')->name('about');
Route::get('/new', 'NewController@show')->name('new');
//Route::get('/login', 'LoginController@show')->name('login');

//Middleware auth routes
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Resource routes
Route::resource('product', 'ItemController');
