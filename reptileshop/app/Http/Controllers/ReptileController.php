<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ReptileController extends HomeController
{
    public function show() {
        return view('reptiles.reptiles');
    }

    public function snake() {
        return view('reptiles.snakes');
    }

    public function lizard() {
        return view('reptiles.lizards');
    }

    public function turtle() {
        return view('reptiles.turtles');
    }

    public function crocodile() {
        return view('reptiles.crocodiles');
    }

}
