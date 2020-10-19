<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubstrateController extends SuppliesController
{
    public function show() {
        return view('supplies.substrates');
    }
}
