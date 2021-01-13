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
Route::get('/', 'HomeController@allPosts')->name('home');
Route::get('/category/{category}', 'HomeController@filter')->name('category');

//Favourite & unfavourite
Route::post('/{favourite}', 'FavouriteController@add_favourite')->name('favourite')->middleware(['auth']);
Route::delete('/{favourite}', 'FavouriteController@delete_favourite')->name('favourite.destroy')->middleware(['auth']);

//Reptile routes
Route::get('/category/1', 'ReptileController@show')->name('reptiles');

Route::get('/amphibians', 'AmphibianController@amphibians')->name('amphibians');
Route::get('/supplies', 'SuppliesController@show')->name('supplies');

//Extra
Route::get('/search', 'HomeController@search')->name('search');

//Middleware auth routes
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function ()
{
    return view('dashboard');
})->name('dashboard');
Route::get('/favourites', 'FavouriteController@favourites')->name('profile.favourites')->middleware(['auth']);

//Admin Routes
Route::get('/admin', 'AdminController@show')->name('admin')->middleware(['auth', 'auth.admin']);
Route::post('/posts/{post}', 'AdminController@deactivate')->name('posts.deactivate')->middleware(['auth', 'auth.admin']);

//Index Route (admin only)
Route::get('/posts', 'PostsController@index')->name('posts.index')->middleware(['auth', 'auth.admin']);

//Create Routes
Route::get('/posts/create', 'PostsController@create')->name('posts.create')->middleware(['auth', 'auth.sellerAdmin']);
Route::post('/posts', 'PostsController@store')->name('posts.store')->middleware(['auth', 'auth.sellerAdmin']);

//Read Route
Route::get('/posts/{post}', 'PostsController@show')->name('posts.show')->middleware(['auth']);

//Update Routes
Route::get('/posts/{post}/edit', 'PostsController@edit')->name('posts.edit')->middleware(['auth', 'auth.sellerAdmin']);
Route::patch('/posts/{post}', 'PostsController@update')->name('posts.update')->middleware(['auth', 'auth.sellerAdmin']);

//Delete Route
Route::delete('/posts/{post}', 'PostsController@destroy')->name('posts.destroy')->middleware(['auth', 'auth.sellerAdmin']);






