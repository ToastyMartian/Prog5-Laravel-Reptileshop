<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuppliesController extends HomeController
{
    public function show() {
        return view('supplies');
    }
}
