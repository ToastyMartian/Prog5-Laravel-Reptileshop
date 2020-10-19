<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends SuppliesController
{
    public function show() {
        return view('supplies.foods');
    }
}
