<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TurtleController extends ReptileController
{
    public function show() {
        return view('reptiles.turtles');
    }
}
