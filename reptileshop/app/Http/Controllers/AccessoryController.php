<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccessoryController extends SuppliesController
{
    public function show() {
        return view('supplies.accessories');
    }
}
