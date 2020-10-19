<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalamanderController extends AmphibianController
{
    public function show() {
        return view('amphibians.salamanders');
    }
}
