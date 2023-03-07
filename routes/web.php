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
    return view('home', ['name'=> $name]);
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/books', 'App\Http\Controllers\BookController@index'); // call the index function from the Controller

Route::post('/books', 'App\Http\Controllers\BookController@store');

Route::get('/delete/{id}', 'App\Http\Controllers\BookController@delete');