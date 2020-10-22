<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuppliesController extends HomeController
{
    public function show() {
        return view('supplies.supplies');
    }

    public function enclosure() {
        return view('supplies.enclosures');
    }

    public function food() {
        return view('supplies.foods');
    }

    public function substrate() {
        return view('supplies.substrates');
    }

    public function accessory() {
        return view('supplies.accessories');
    }
}
