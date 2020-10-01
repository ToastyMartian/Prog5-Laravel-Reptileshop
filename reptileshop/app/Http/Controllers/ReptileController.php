<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ReptileController extends HomeController
{
    public function show() {
        return view('reptiles.reptiles');
    }
}
