<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class AboutController extends Controller
{
    public function show() {
        return view('about');
    }
}
