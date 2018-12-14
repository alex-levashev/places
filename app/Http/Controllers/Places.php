<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
use App\Picture;

class Places extends Controller
{
  public function ShowPlaces() {
    $places = Place::all();
    return view('places', compact('places'));
  }

  public function AddPlace() {
    $place = new Place;
    $place->title = "Африка";
    $place->type = "Отдых";
    $place->save();
  }
}
