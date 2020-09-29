<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends HomeController
{
    public function show() {
        return view('about');
    }
}
