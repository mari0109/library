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

Route::get('/', function () {
    $name = request('name');
    return view('welcome', ['name'=> $name]);
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/books', 'App\Http\Controllers\BookController@index'); // call the index function from the Controller ->middleware('auth)

Route::post('/books', 'App\Http\Controllers\BookController@store'); // add new data
Route::get('/edit/{id}', 'App\Http\Controllers\BookController@edit'); // access edit data
Route::put('/show/{id}', 'App\Http\Controllers\BookController@update');
Route::get('/show/{id}', 'App\Http\Controllers\BookController@view'); // read single data
Route::get('/delete/{id}', 'App\Http\Controllers\BookController@delete'); // delete data

Route::get('/search', 'App\Http\Controllers\BookController@search'); // search data