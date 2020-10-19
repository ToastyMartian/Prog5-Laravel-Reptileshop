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

Route::get('/', 'HomeController@show')->name('home');

Route::get('/reptiles', 'ReptileController@show')->name('reptiles');
Route::get('/reptiles/snakes', 'SnakeController@show')->name('reptiles.snakes');
Route::get('/reptiles/crocodiles', 'CrocodileController@show')->name('reptiles.crocodiles');
Route::get('/reptiles/lizards', 'LizardController@show')->name('reptiles.lizards');
Route::get('/reptiles/turtles', 'TurtleController@show')->name('reptiles.turtles');

Route::get('/amphibians', 'AmphibianController@show')->name('amphibians');
Route::get('/amphibians/frogs', 'FrogController@show')->name('amphibians.frogs');
Route::get('/amphibians/toads', 'ToadController@show')->name('amphibians.toads');
Route::get('/amphibians/salamanders', 'SalamanderController@show')->name('amphibians.salamanders');

Route::get('/supplies', 'SuppliesController@show')->name('supplies');
Route::get('/supplies/accessories', 'AccessoryController@show')->name('supplies.accessories');
Route::get('/supplies/enclosures', 'EnclosureController@show')->name('supplies.enclosures');
Route::get('/supplies/foods', 'FoodController@show')->name('supplies.foods');
Route::get('/supplies/substrates', 'SubstrateController@show')->name('supplies.substrates');

Route::get('/about', 'AboutController@show')->name('about');
Route::get('/new', 'NewController@show')->name('new');
//Route::get('/login', 'LoginController@show')->name('login');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
