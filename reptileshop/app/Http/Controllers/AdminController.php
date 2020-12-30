<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends HomeController
{
    public function show() {
        return view('admin');
    }
}
