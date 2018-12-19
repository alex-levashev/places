<?php


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

Route::get('/', function () { return view('welcome'); });
Route::get('/places', 'Places@index');
Route::get('/places/create', 'Places@create');
Route::get('/places/{id}', 'Places@show');
Route::get('/places/{id}/delete', 'Places@delete');
Route::post('/places', 'Places@store');
Route::get('/places/{id}/pictures/add', 'Pictures@add');
Route::get('/places/{id}/pictures', 'Pictures@show');
Route::post('/places/{id}/pictures', 'Pictures@store')->name('picture_add');
// Route::get('add_place', 'Places@AddPlace');
// Route::get('/add_place', function () { return view('add_place'); });
