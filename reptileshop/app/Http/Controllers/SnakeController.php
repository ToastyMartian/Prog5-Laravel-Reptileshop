<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SnakeController extends ReptileController
{
    public function show() {
        return view('reptiles.snakes');
    }
}
