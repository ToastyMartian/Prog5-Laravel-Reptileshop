<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnclosureController extends SuppliesController
{
    public function show() {
        return view('supplies.enclosures');
    }
}
