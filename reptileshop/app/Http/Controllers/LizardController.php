<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LizardController extends ReptileController
{
    public function show() {
        return view('reptiles.lizards');
    }
}
