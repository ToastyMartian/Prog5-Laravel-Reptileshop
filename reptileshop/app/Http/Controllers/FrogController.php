<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrogController extends AmphibianController
{
    public function show() {
        return view('amphibians.frogs');
    }
}
