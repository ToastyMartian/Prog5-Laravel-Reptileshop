<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToadController extends AmphibianController
{
    public function show() {
        return view('amphibians.toads');
    }
}
