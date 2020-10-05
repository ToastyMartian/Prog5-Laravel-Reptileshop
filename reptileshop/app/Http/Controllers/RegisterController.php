<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends HomeController
{
    public function show() {
        return view('register');
    }
}
