<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
use App\Picture;

class Pictures extends Controller
{
    public function add(Place $id) {
      $number =$id->id;
      return view('pictures_add', compact('number'));
    }

    public function store(Place $id) {
      request('picture')->store('pictures');
      $p_id = $id->id;
      $picture = new Picture;
      $picture->name = request('name');
      $picture->path = request('picture')->hashName();
      $picture->placeid = $p_id;
      $picture->save();
      return redirect("/places/$p_id/pictures/");
    }

    public function show(Place $id) {
      $pictures = Picture::where('placeid',$id->id)->get();
      return view('pictures_show', compact('pictures'));
    }
}
