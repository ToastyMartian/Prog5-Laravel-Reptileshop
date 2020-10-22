<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AmphibianController extends HomeController
{
    public function show() {
        return view('amphibians.amphibians');
    }

    public function frog() {
        return view('amphibians.frogs');
    }

    public function toad() {
        return view('amphibians.toads');
    }

    public function salamander() {
        return view('amphibians.salamanders');
    }
}
