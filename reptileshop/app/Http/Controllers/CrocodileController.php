<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrocodileController extends ReptileController
{
    public function show() {
        return view('reptiles.crocodiles');
    }
}
