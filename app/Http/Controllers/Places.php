<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
use App\Picture;

class Places extends Controller
{
  public function index() {
    $places = Place::all();
    return view('places_index', compact('places'));
  }

  public function show(Place $id) {
    return view('places_show', compact('id'));
  }

  public function create() {
    return view('places_create');
  }

  public function store() {
  $place = new Place;
  $place->title = request('title');
  $place->type = request('type');
  $place->save();
  return redirect('places');
  }

  public function delete(Place $id) {
    Place::destroy($id->id);
    return redirect('places');
  }
}
