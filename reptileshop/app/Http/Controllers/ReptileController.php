<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReptileController extends HomeController
{
    public function show() {
        return view('reptiles');
    }
}
