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
Route::get('/amphibians', 'AmphibianController@show')->name('amphibians');
Route::get('/supplies', 'SuppliesController@show')->name('supplies');
