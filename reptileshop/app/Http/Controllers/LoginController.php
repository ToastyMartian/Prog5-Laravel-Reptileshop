<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends HomeController
{
    public function show() {
        return view('login');
    }
}
