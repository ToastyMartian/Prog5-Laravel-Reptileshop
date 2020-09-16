<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AmphibianController extends HomeController
{
    public function show() {
        return view('amphibians');
    }
}
