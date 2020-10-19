<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends HomeController
{
    public function show() {
        return view('new');
    }
}
